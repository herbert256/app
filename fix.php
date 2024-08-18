<?php

    $list1 = glob ( "/app/seq/*.pad" );

    foreach ( $list1 as $file ) {

      $source = file_get_contents ( $file );

      $source = str_replace ( '{one',  '{sequence mySeq', $source );
      $source = str_replace ( '{$mySeq', '{$seq',      $source );
      $source = str_replace ( '{/mySeq', '{/seq',      $source );

      $source = str_replace ( '{one',  '{sequence one', $source );
      $source = str_replace ( '{$one', '{$seq',      $source );
      $source = str_replace ( '{/one', '{/seq',      $source );

      $source = str_replace ( '{two',  '{sequence two', $source );
      $source = str_replace ( '{$two', '{$seq',      $source );
      $source = str_replace ( '{/two', '{/seq',      $source );

      $source = str_replace ( '{mySplice',  '{sequence mySplice', $source );
      $source = str_replace ( '{$mySplice', '{$seq',      $source );
      $source = str_replace ( '{/mySplice', '{/seq',      $source );

      file_put_contents ( $file, $source ) ;
    
    }

    $list1 = glob ( "/app/seq/*.pad" );
    $list2 = glob ( "/pad/seq/actions/*.php" );

    foreach ( $list1 as $file ) {

      $source = file_get_contents ( $file );

      foreach ( $list2 as $seq ) {

        $seq = str_replace ( '/pad/seq/actions/', '', $seq );
        $seq = str_replace ( '.php',              '', $seq );

        $source = str_replace ( '{'  . $seq, '{sequence ' . "$seq =", $source );
        $source = str_replace ( '{/' . $seq, '{/seq',            $source );
        $source = str_replace ( '{$' . $seq, '{$seq',            $source );

        file_put_contents ( $file, $source ) ;
      
      }

    }

    echo 'done';

?>