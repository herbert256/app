<?php

  foreach ( glob ( '/app/manual/sequence/actions/store/*.pad' ) as $file ) {

    $action = str_replace ( '/app/manual/sequence/actions/store/', '', $file   );
    $action = str_replace ( '.pad',                                 '', $action );

    copy ( $file, "/app/sequence/store/actions/$action.pad" );

  }

?>