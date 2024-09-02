<?php

  if ( ! isset ( $example ) or ! $example )
    $example = 'basic';

  $examples = seqDir ( "/app/sequence/$example" ) ;

  if ( ! isset ( $item ) or ! $item )
    $item = $examples [0];

?>