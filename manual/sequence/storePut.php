<?php

  foreach ( glob ( '/pad/sequence/actions/types/*.php' ) as $file ) {

    $action = str_replace ( '/pad/sequence/actions/types/', '', $file   );
    $action = str_replace ( '.php',                         '', $action );

    $actions [] ['action'] = $action;

  }

  if ( ! isset ( $go ) or ! $go )
    $go = 'append';

  $title .= " - $go"

?>