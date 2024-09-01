        <?php

  if ( ! isset ( $fromMenu ) )
    return NULL;

  set_time_limit ( 300 );

  foreach ( padList ( 0 ) as $one ) {
    if ( str_contains ( $one ['item'], 'sequence' ) )
      continue;
    getPage ( $one ['item'], 1, 1 );
  }

  echo "done";
    
?>