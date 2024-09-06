<?php

  foreach ( padList ( 0 ) as $one )
    if ( str_starts_with ( $one ['item'], 'sequence/' ) )
      getPage ( $one ['item'] );
     
?>