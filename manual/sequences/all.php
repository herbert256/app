<?php

  $list = array_diff ( scandir ( '/pad/sequence/types' ), [ '.','..','pull' ] ) ;

  sort ( $list );

  if ( ! isset ( $go ) or ! $go )
    $go = 'even';

?>