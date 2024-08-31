<?php
 
  include_once '/pad/sequence/inits/_lib.php';
  include_once '/app/develop/_lib/lib.php';

  foreach ( glob ( '/app/sequence/basic/*.pad'     ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/keepRemove/*.pad'       ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/store/*.pad'     ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/operation/*.pad' ) as $file ) unlink($file);

  foreach ( padTypes () as $type ) {

    $parm = include '/app/develop/sequencesParm.php';

    include '/app/develop/sequencesGenerated.php';
    include '/app/develop/sequencesCheck.php';
    include '/app/develop/sequencesBasic.php';
    include '/app/develop/sequencesOperation.php';
    include '/app/develop/sequencesStore.php';
    include '/app/develop/sequencesKeepRemove.php';

  }  

?>