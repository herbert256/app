<?php

  $build = padSeqBuild ( $type );
  $parm  = '';

  if ( $build == 'fixed' or $build == 'order' )
    return; 

  $a = padCode ( "{sequence 5, $type}{\$sequence}{/sequence}"   );
  $b = padCode ( "{sequence 5, $type=5}{\$sequence}{/sequence}" );

  $e = FALSE;
  foreach ( [ 'loop', 'make', 'function', 'bool' ] as $check ) 
    if (   file_exists       ( "/pad/sequence/types/$type/$check.php") ) {
      $c = file_get_contents ( "/pad/sequence/types/$type/$check.php");
      if ( str_contains ( $c, "padSeqParm" ) ) 
        $e = TRUE;
    }

  if ( $e or $a <> $b ) 
    $parm = '=4';

  if ( $parm )
    file_put_contents ( "/pad/sequence/types/$type/flags/parm", 1 );

?>