<?php


  function seqDir ( $dir )  {
  
    $out = [];

    foreach ( array_diff ( scandir ( $dir ), [ '.', '..' ] ) as $file )
      $out [] = str_replace( '.pad', '', $file );
    
    return $out;

  }


?>