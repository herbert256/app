<?php

    $a = padCode ( "{sequence 10, $type}{\$sequence}{/sequence}"   );
    $b = padCode ( "{sequence 10, $type=5}{\$sequence}{/sequence}" );

    $e = TRUE;
    foreach ( ['loop','make'] as $check ) 
      if (   file_exists       ( "/pad/sequence/types/$type/$check.php") ) {
        $c = file_get_contents ( "/pad/sequence/types/$type/$check.php");
        if ( str_contains ( $c, "padSeqParm"         ) ) $e = FALSE;
        if ( str_contains ( $c, padSeqname ( $type ) ) ) $e = FALSE;
      }

    if     ( $type  == 'oeis' ) $parm = "=87";
    elseif ( $e or $a == $b )   $parm = '';
    else                        $parm = "=4";

?>