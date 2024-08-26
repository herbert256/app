<?php

  if ( ! isset ( $fromMenu ) )
    return NULL;

  set_time_limit ( 300 );

  padPageGet ( 'develop/operations',   '&fromMenu=1' );
  
  delTree ( '/app/_xref' ); 
  padPageGet ( 'develop/callAll',      '&fromMenu=1' );

  delTree ( '/app/_regression');
  padPageGet ( 'develop/regressionGo', '&fromMenu=1' );
  padPageGet ( 'develop/regressionGo', '&fromMenu=1' );

  function delTree ( $dir ) {

    foreach ( array_diff ( scandir ( $dir ), [ '.', '..' ] ) as $file )
      ( is_dir ( "$dir/$file" ) ) ? delTree ( "$dir/$file" ) : unlink ( "$dir/$file" );

    return rmdir ( $dir );

  }

  padRedirect ( 'develop/regression' );

?>