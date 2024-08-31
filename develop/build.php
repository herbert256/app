<?php

  include_once '/app/develop/_lib/lib.php';

  set_time_limit ( 300 );

  deleteDir  ( '/app/_xref' ); 
  deleteDir  ( '/app/_regression');

  padPageGet ( 'develop/sequences'    );  
  padPageGet ( 'develop/callAll'      );
  padPageGet ( 'develop/regressionGo' );
  padPageGet ( 'develop/regressionGo' );

  padRedirect ( 'develop/regression' );

?>