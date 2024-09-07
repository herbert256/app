<?php

  foreach ( glob ( '/app/manual/sequence/actions/double/*.pad' ) as $file ) {

    $action = str_replace ( '/app/manual/sequence/actions/double/', '', $file   );
    $action = str_replace ( '.pad',                                 '', $action );

    copy ( "/app/manual/sequence/actions/double/$action.pad", "/app/sequence/actions/double/$action.pad" );

    file_put_contents ( "/pad/sequence/after/actions/double/$action", 1 );

  }

  foreach ( glob ( '/app/manual/sequence/actions/single/*.pad' ) as $file ) {

    $action = str_replace ( '/app/manual/sequence/actions/single/', '', $file   );
    $action = str_replace ( '.pad',                                 '', $action );

    copy ( "/app/manual/sequence/actions/single/$action.pad", "/app/sequence/actions/single/$action.pad" );

    file_put_contents ( "/pad/sequence/after/actions/single/$action", 1 );

  }

?>