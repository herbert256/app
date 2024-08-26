<?php

  if ( ! isset ( $pages ) ) 
    return;

  $go = file ( "/app/_xref/sequences/$pages", FILE_IGNORE_NEW_LINES );

  $title .= " - $type - $item";

?>