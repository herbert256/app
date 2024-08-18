<?php

    $list1 = glob ( "/app/seq/*.pad" );
    $list2 = glob ( "/pad/seq/actions/*.php" );

    foreach ( $list1 as $file ) {

      $source = file_get_contents ( $file );

      foreach ( $list2 as $seq ) {

        $seq = str_replace ( '/pad/seq/actions/', '', $seq );
        $seq = str_replace ( '.php',              '', $seq );

        $source = str_replace ( '{'  . $seq, '{seq ' . "$seq =", $source );
        $source = str_replace ( '{/' . $seq, '{/seq',            $source );
        $source = str_replace ( '{$' . $seq, '{$seq',            $source );

        $source = str_replace ( '{$mySeq', '{$seq',        $source );

        file_put_contents ( $file, $source ) ;
      
      }

    }

    echo 'done';

?>