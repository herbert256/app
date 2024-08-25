<?php

  if ( ! isset ( $fromMenu ) )
    return NULL;

  set_time_limit ( 300 );

  delTree ( '/app/_regression');
  delTree ( '/app/_xref' ); 

  padPageGet ( 'develop/sequences',    '&fromMenu=1' );
  padPageGet ( 'develop/callAll',      '&fromMenu=1' );
  padPageGet ( 'develop/regressionGo', '&fromMenu=1' );
  padPageGet ( 'develop/regressionGo', '&fromMenu=1' );

  function delTree ( $dir ) {

    foreach ( array_diff ( scandir ( $dir ), array ( '.', '..' ) ) as $file )
      ( is_dir ( "$dir/$file" ) ) ? delTree ( "$dir/$file" ) : unlink ( "$dir/$file" );

    return rmdir($dir);

  }

  padRedirect ( 'develop/regression' );

?>