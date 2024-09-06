  <?php

  $nows ['index'] ['text'] = 'Introduction';
  $nows ['index'] ['now']  = 'index';

  foreach ( glob ( '/app/manual/sequence/*.pad' ) as $file ) {

    $now = str_replace ( '/app/manual/sequence/', '', $file );
    $now = str_replace ( '.pad',                  '', $now );

    if ( $now <> '_inits' and $now <> 'index' and $now <> 'pages' ) {
      $nows [$now] ['text'] = ucfirst ( $now );
      $nows [$now] ['now'] = $now;
    }

  }

  if ( ! isset ( $go ) or ! $go )
    $go = 'index';

  $title = 'Sequence - ' . $nows [$go] ['text']

?>