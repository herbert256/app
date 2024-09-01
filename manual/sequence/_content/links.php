<?php

  $links = links ( "/app/$dir" ) ;

  if ( ! isset ( $next ) or ! $next )
    $next = $default;

  $title .= " - $next"

?>