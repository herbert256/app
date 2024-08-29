<?php

  if ( ! isset ( $pages ) ) 
    return;

  $go = file ( "/app/_xref/sequences/$pages", FILE_IGNORE_NEW_LINES );

  foreach ( $go as $key => $value )
    if ( ! str_starts_with ( $value, 'sequence/' ) )
      unset ( $go [$key] );

  $title .= " - $type - $item";

?>