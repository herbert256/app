<?php
 
  include_once '/pad/sequence/inits/_lib.php';
  include_once '/app/develop/_lib/lib.php';
  
  foreach ( glob ( '/app/sequence/basic/*.pad'           ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/keepRemove/*.pad'      ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/operation/*.pad'       ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/operation/store/*.pad' ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/store/*.pad'           ) as $file ) unlink($file);

  foreach ( glob ( '/pad/sequence/store/actions/*'       ) as $file ) unlink($file);
  foreach ( glob ( '/pad/sequence/store/operations/*'    ) as $file ) unlink($file);
 
  foreach ( padTypes () as $type ) {

    include '/app/develop/sequence/flags.php';

    $parm = include '/app/develop/sequence/parm.php';

    include '/app/develop/sequence/generated.php';
    include '/app/develop/sequence/check.php';

    include '/app/develop/sequence/basic.php';
    include '/app/develop/sequence/keepRemove.php';
    include '/app/develop/sequence/oprSingle.php';
    include '/app/develop/sequence/oprDouble.php';
    include '/app/develop/sequence/store.php';

  }  

  include '/app/develop/sequence/setStore.php';

  include '/app/develop/sequence/test.php';

?>