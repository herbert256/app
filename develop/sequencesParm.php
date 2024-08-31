<?php

  $build = padSeqBuild ( $type );

  if ( $build == 'fixed' or $build == 'order' ) {
    if ( file_exists ( "/pad/sequence/types/$type/parm" ) )
      unlink ( "/pad/sequence/types/$type/parm" );
    return ''; 
  }

  $a = padCode ( "{sequence 5, $type}{\$sequence}{/sequence}"   );
  $b = padCode ( "{sequence 5, $type=5}{\$sequence}{/sequence}" );

  $e = FALSE;
  foreach ( [ 'loop', 'make', 'function', 'bool' ] as $check ) 
    if (   file_exists       ( "/pad/sequence/types/$type/$check.php") ) {
      $c = file_get_contents ( "/pad/sequence/types/$type/$check.php");
      if ( str_contains ( $c, "padSeqParm" ) ) $e = TRUE;
    }

  if     ( $a <> $b         ) $parm = '=4';
  elseif ( $e               ) $parm = '=4';
  else                        $parm = "";

  if ( $parm and ! file_exists ( "/pad/sequence/types/$type/parm" ) )
    file_put_contents ( "/pad/sequence/types/$type/parm", 1 );

  if ( ! $parm and file_exists ( "/pad/sequence/types/$type/parm" ) )
    unlink ( "/pad/sequence/types/$type/parm" );

  return $parm;

?>