<?php
 
  $types  = glob ( '/app/sequence/specials/*.pad' );

  foreach ( $types as $file ) {

    $type = str_replace ( '/app/sequence/specials/', '', $file );
    $type = str_replace ( '.pad', '', $type );

    $source = file_get_contents ( $file );

    if ( str_starts_with  ( $source, "{table}{demo}{sequence $type," ) )
      if ( str_ends_with  ( $source, '{/sequence}{/demo}{/table}'    ) )
        if ( substr_count ( $source, '{demo}' == 1                   ) ) 
          rename ( "/app/sequence/specials/$type.pad", "/app/sequence/old/$type.pad" );

  }

?>