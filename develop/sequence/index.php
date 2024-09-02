<?php
 
  include_once '/pad/sequence/inits/_lib.php';
  include_once '/app/develop/_lib/lib.php';
  
  foreach ( glob ( '/app/sequence/basic/*.pad'                ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/actions/single/*.pad'       ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/actions/double/*.pad'       ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/keepRemove/*.pad'           ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/operation/single/*.pad'     ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/operation/double/*.pad'     ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/store/single/*.pad'         ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/store/double/*.pad'         ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/store/double/*.pad'         ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/actions/types/double/*.pad' ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/actions/types/single/*.pad' ) as $file ) unlink($file);
  foreach ( glob ( '/pad/sequence/actions/single/*'           ) as $file ) unlink($file);
  foreach ( glob ( '/pad/sequence/actions/double/*'           ) as $file ) unlink($file);

  include '/app/develop/sequence/actions.php';
 
  foreach ( padTypes () as $type ) {

    include '/app/develop/sequence/flags.php';

    $parm = include '/app/develop/sequence/parm.php';

    include '/app/develop/sequence/generated.php';
    include '/app/develop/sequence/check.php';

    include '/app/develop/sequence/basic.php';
    include '/app/develop/sequence/typeActions.php';
    include '/app/develop/sequence/oprSingle.php';
    include '/app/develop/sequence/oprDouble.php';
    include '/app/develop/sequence/store.php';
    include '/app/develop/sequence/keepRemove.php';

  }  

  include '/app/develop/sequence/test.php';

?>