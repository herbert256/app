<?php

  foreach ( glob ( '/app/manual/sequence/examples/*.pad' ) as $file ) {

    $action = str_replace ( '/app/manual/sequence/examples/', '', $file   );
    $action = str_replace ( '.pad',                           '', $action );

    copy ( $file, "/app/sequence/specials/$action.pad" );

  }

?>