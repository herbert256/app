<?php

  include_once '/app/develop/_lib/lib.php';

  set_time_limit ( 300 );

  deleteDir  ( '/app/_xref' ); 
  deleteDir  ( '/app/_regression');

  padPageGet ( 'develop/sequence/index' );  

  foreach ( padList ( 0 ) as $one )
    getPage ( $one ['item'], 1, 1 );
  
  padPageGet ( 'develop/regression/go'  );

  padRedirect ( 'develop/regression'    );

?>