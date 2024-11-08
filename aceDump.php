<?php

  $dir  = '/xxx';
  $envs = [ 'dev', 'tst', 'acc', 'prd' ];
  $file = 'patch-integrationserver.yaml';

  $dump = [];

  foreach ( glob ( $dir ) as $repo )
    foreach ( $envs as $env )
      getBars ( $repo, $env, $file, $dump );

  function getBars ( $repo, $env, $file, &$dump ) {

    $file = "$repo/$env/$file";
    $repo = between ( $file, 'intace_is-', '/');
    $data = file_get_contents ( $file );

    $bars = between ( $data, '"', '"', strpos ( $data, 'barUrl' ) );
    $bars = explode ( ',' , $bars );

    foreach ($bars as $bar) {

      $bar = substr ( $bar , strrpos ( $bar, '/' ) + 1 );
      $bar = str_replace ( '.bar', '', $bar );

      $dump [$repo] [$bar] [$env] = $version;

    }

  }

  function between ( $str, $start, $end, $offset=0 ) {
    $pos1 = strpos ( $str, $start, $offset );
    $pos2 = strpos ( $str, $end, $pos1+1 );
    return substr ( $str, $pos1+1, $pos2-($pos1+1) );
  }

?>