<?php


  foreach ( glob ( '/app/sequence/actions/single/*.pad' ) as $file ) {

    $action = str_replace ( '/app/sequence/actions/single', '', $file   );
    $action = str_replace ( '.pad',                         '', $action );

    file_put_contents ( "/pad/sequence/actions/single/$action", 1 );

  }


  foreach ( glob ( '/app/sequence/actions/double/*.pad' ) as $file ) {

    $action = str_replace ( '/app/sequence/actions/double/', '', $file   );
    $action = str_replace ( '.pad',                          '', $action );

    file_put_contents ( "/pad/sequence/actions/double/$action", 1 );
    file_put_contents ( "/pad/sequence/store/actions/$action" , 1 );

  }


?>