<?php

  $build = padSeqBuild ( $type );

  if ( $build == 'fixed' or $build == 'order' )
    return ''; 

  $a = padCode ( "{sequence 5, $type}{\$sequence}{/sequence}"   );
  $b = padCode ( "{sequence 5, $type=5}{\$sequence}{/sequence}" );

  $e = FALSE;
  foreach ( [ 'loop', 'make', 'function', 'bool' ] as $check ) 
    if (   file_exists       ( "/pad/sequence/types/$type/$check.php") ) {
      $c = file_get_contents ( "/pad/sequence/types/$type/$check.php");
      if ( str_contains ( $c, "padSeqParm" ) ) $e = TRUE;
    }

  if     ( $a <> $b ) $parm = '=4';
  elseif ( $e       ) $parm = '=4';
  else                $parm = "";

  if ( $parm )
    file_put_contents ( "/pad/sequence/types/$type/flags/parm", 1 );

  return $parm;

?>