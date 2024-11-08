<?php
   
  foreach ( glob ( '/app/sequence/basic/*'                  ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/keepRemove/*'             ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/make/*'             ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/one/*'                 ) as $file ) unlink($file);

  foreach ( glob ( '/app/sequence/operation/single/*'       ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/operation/double/*'       ) as $file ) unlink($file);

  foreach ( glob ( '/app/sequence/store/operations/*'       ) as $file ) unlink($file);
 
  foreach ( glob ( '/pad/sequence/actions/double/*'   ) as $file ) unlink($file);
  foreach ( glob ( '/pad/sequence/actions/single/*'   ) as $file ) unlink($file);

  foreach ( glob ( '/pad/sequence/store/actions/*'    ) as $file ) unlink($file);
  foreach ( glob ( '/pad/sequence/store/operations/*' ) as $file ) unlink($file);

?>