<?php
 
  if ( ! isset ( $fromMenu ) )
    return NULL;

  include_once '/pad/sequence/inits/_lib.php';

  foreach ( glob ( '/app/sequence/*.pad' ) as $file )
    unlink($file);

  $source = "";
  $types  = glob ( '/pad/sequence/types/*' );

  foreach ( $types as $type ) {

    $type = str_replace ( '/pad/sequence/types/', '', $type );

    $build = padSeqBuild ( $type );

    if ( $type  == 'juggler' or $type == 'random' or $type  == 'pull' or 
         $build == 'fixed' or $build == 'order'   ) {
      $source .= include '/app/develop/sequencesSpecial.php';
      continue;

    }

    include '/app/develop/sequencesCheck.php';

    if     ( $type  == 'oeis' ) $parm = "=87";
    elseif ( $e or $a == $b )   $parm = '';
    else                        $parm = "=4";

    $one = "{table}\n\n"
         . "{demo}{sequence 10}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{demo}{sequence 10, $type$parm}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{/table}{table}\n\n"
         . "{demo}{sequence loop, from=1, to=10}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{demo}{sequence loop, from=1, to=10, make, $type$parm}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{demo}{sequence loop, from=1, to=10, keep, $type$parm}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{demo}{sequence loop, from=1, to=10, remove, $type$parm}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{/table}{table}\n\n"
         . "{demo}{sequence 10, step=3}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{demo}{sequence 10, step=3, $type$parm}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{/table}";

    padCode ( $one );

    file_put_contents ( "/app/sequence/$type.pad", $one );

    $source .= "<h3>$type</h3>$one";

  }

  return $source;

?>