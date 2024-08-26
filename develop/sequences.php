<?php

return;

  $source = "{table}{demo}{sequence 10}\n  {\$sequence}\n{/sequence}{/demo}\n\n";
  
  $list = glob ( '/pad/sequence/types/*' );
  sort ($list);

  foreach ( $list as $type ) {

    $type = str_replace ( '/pad/sequence/types/', '', $type );

    if ( $type == 'pull' ) 
      continue;

    if     ( $type == 'oeis'    ) $go = "15, oeis=87";
    elseif ( $type == 'juggler' ) $go = "15, juggler=9";
    elseif ( $type == 'list'    ) $go = "list='1;8;5;2;9;66'";
    elseif ( $type == 'range'   ) $go = "range='1..10'";
    elseif ( $type == 'eval'    ) $go = "15, eval='@ * 10 | @ - 1'";
    elseif ( $type == 'random'  ) $go = '15, random, min=100, max=199';
    else {

      $a = padCode ( "{sequence 15, $type}{\$sequence}{/sequence}"   );
      $b = padCode ( "{sequence 15, $type=5}{\$sequence}{/sequence}" );

      $e = TRUE;
      foreach ( ['loop','make'] as $check ) 
        if (   file_exists       ( "/pad/sequence/types/$type/$check.php") ) {
          $c = file_get_contents ( "/pad/sequence/types/$type/$check.php");
          if ( str_contains ( $c, "padSeqParm"         ) ) $e = FALSE;
          if ( str_contains ( $c, padSeqname ( $type ) ) ) $e = FALSE;
        }

      if ( $e or $a == $b ) $go = "15, $type";
      else                  $go = "15, $type=5";

    }

    $source .= "{demo}{sequence $go}\n  {\$sequence}\n{/sequence}{/demo}\n\n";

  }

  file_put_contents ( '/app/temp', "$source{/table}" );

?>