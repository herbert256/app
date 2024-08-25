<?php

  include_once '/pad/sequence/inits/_lib.php';

  $types  = glob ( '/pad/sequence/types/*' );

  foreach ( $types as $type ) {

    $type = str_replace ( '/pad/sequence/types/', '', $type );

    if ( file_exists ( "/app/sequence/$type.pad" ))
      return;

    $build = padSeqBuild ( $type );

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
   
    if     ( $e or $a == $b ) $parm = '';
    else                      $parm = "=5";

    file_put_contents ( 
      "/app/sequence/$type.pad",
      "{table}{demo}{sequence $type$parm, rows=10}\n  {\$sequence}\n{/sequence}{/demo}{/table}"
    );
 
  }

  echo 'done';
  

?>