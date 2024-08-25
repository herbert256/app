<?php

  if ( ! isset ( $fromMenu ) )
    return NULL;

  include_once '/pad/sequence/inits/_lib.php';

  foreach ( glob ( '/app/operations/*.pad' ) as $file )
    unlink($file);

  $source = "";
  $types  = glob ( '/pad/sequence/types/*' );

  foreach ( $types as $type ) {

    $type = str_replace ( '/pad/sequence/types/', '', $type );

    $build = padSeqBuild ( $type );

    if ( $type  == 'juggler' ) continue;
    if ( $type  == 'random'  ) continue;
    if ( $build == 'fixed'   ) continue;
    if ( $build == 'order'   ) continue;

    $a = padCode ( "{sequence rows=10, $type}{\$sequence}{/sequence}"   );
    $b = padCode ( "{sequence rows=10, $type=5}{\$sequence}{/sequence}" );

    $c = $d = '';
    if (   file_exists       ( "/pad/sequence/types/$type/loop.php") )
      $c = file_get_contents ( "/pad/sequence/types/$type/loop.php");
    if (   file_exists       ( "/pad/sequence/types/$type/make.php") )
      $d = file_get_contents ( "/pad/sequence/types/$type/make.php");

    if     ( str_contains ( $c, "padSeqParm"         ) ) $e = FALSE;
    elseif ( str_contains ( $c, padSeqname ( $type ) ) ) $e = FALSE;
    elseif ( str_contains ( $d, "padSeqParm"         ) ) $e = FALSE;
    elseif ( str_contains ( $d, padSeqname ( $type ) ) ) $e = FALSE;
    else                                                 $e = TRUE;

    if     ( $e or $a == $b )   $parm = '';
    elseif ( $type  == 'oeis' ) $parm = "=87";
    else                        $parm = "=5";

    if ($type == 'prime' ) $base = 'step=5';
    else                   $base = 'even';
                           $base = 'step=3';

    $one = '{table}';

    foreach ( [ '', ", $base" ] as $add )
      $one .= "{demo}{sequence rows=10$add}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
           .  "{demo}{sequence rows=10$add, $type$parm}\n  {\$sequence}\n{/sequence}{/demo}\n\n";

    $one .= "{/table}";

    file_put_contents ( "/app/operations/$type.pad", $one );

    $source .= "<h3>$type</h3>$one";

  }

  return $source;

?>