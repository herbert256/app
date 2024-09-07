<?php

  
  foreach ( padTypes () as $type ) {

    $parm = include '/app/develop/sequence/parm.php';

    if ( $parm )
      file_put_contents ( "/pad/sequence/after/store/operations/$type", 1 );

  }  


  foreach ( glob ( '/app/manual/sequence/actions/double/*.pad' ) as $file ) {

    $action = str_replace ( '/app/manual/sequence/actions/double/', '', $file   );
    $action = str_replace ( '.pad',                                 '', $action );

    file_put_contents ( "/pad/sequence/after/store/actions/$action", 1 );

  }


?>