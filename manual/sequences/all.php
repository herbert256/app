<?php

  $list = array_diff ( scandir ( '/pad/sequence/types' ), [ '.', '..' ] ) ;

  sort ( $list );

  if ( ! isset ( $go ) or ! $go )
    $go = 'even';

?>