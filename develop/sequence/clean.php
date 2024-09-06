<?php
   
  foreach ( glob ( '/app/sequence/basic/*.pad'            ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/keepRemove/*.pad'       ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/specials/*'             ) as $file ) unlink($file);

  foreach ( glob ( '/app/sequence/operation/single/*.pad' ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/operation/double/*.pad' ) as $file ) unlink($file);

  foreach ( glob ( '/app/sequence/store/actions/*'        ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/store/operations/*'     ) as $file ) unlink($file);
 
  foreach ( glob ( '/app/sequence/actions/double/*'       ) as $file ) unlink($file);
  foreach ( glob ( '/app/sequence/actions/single/*'       ) as $file ) unlink($file);

  foreach ( glob ( '/pad/sequence/actions/double/*'       ) as $file ) unlink($file);
  foreach ( glob ( '/pad/sequence/actions/single/*'       ) as $file ) unlink($file);

  foreach ( glob ( '/pad/sequence/store/actions/*'        ) as $file ) unlink($file);
  foreach ( glob ( '/pad/sequence/store/operations/*'     ) as $file ) unlink($file);

?>