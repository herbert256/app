<?php

  function getXref ( $type, $dir ) {
    
    $base = "/app/_xref/sequences/";

    $directory = new DirectoryIterator ( "$base$dir" );
    $iterator  = new IteratorIterator  ( $directory );

    $items = [];
    
    foreach ($iterator as $one) {

      $path = padCorrectPath ( $one->getPathname() );
      $ext  = $one->getExtension();
      $file = $one->getFilename();

      $item = substr($file, 0, strrpos($file, '.')   );

      if ( ! $item       ) continue;
      if ( $file == '.'  ) continue;
      if ( $file == '..' ) continue;

      $items [$item] ['item']  = $item;
      $items [$item] ['dir']   = '';
      $items [$item] ['pages'] = "$dir/$file";

    }
   
    ksort ( $items );
    return $items;

  }


?>