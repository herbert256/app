<?php
   
  foreach ( glob ( '/app/sequence/basic/*'                  ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/keepRemove/*'             ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/singles/*'                ) as $file ) unlink($file);

  foreach ( glob ( '/app/sequence/operation/single/*'       ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/operation/double/*'       ) as $file ) unlink($file);

  foreach ( glob ( '/app/sequence/store/operations/*'       ) as $file ) unlink($file);
 
  foreach ( glob ( '/pad/sequence/after/actions/double/*'   ) as $file ) unlink($file);
  foreach ( glob ( '/pad/sequence/after/actions/single/*'   ) as $file ) unlink($file);

  foreach ( glob ( '/pad/sequence/after/store/actions/*'    ) as $file ) unlink($file);
  foreach ( glob ( '/pad/sequence/after/store/operations/*' ) as $file ) unlink($file);

?>