<?php
 
   if ( $parm or $type == 'pull' or $build == 'fixed' or $build == 'order' )
    return;

  if ( ! file_exists ("/pad/sequence/types/$type/bool.php") and 
       ! file_exists ("/pad/sequence/types/$type/generated.php") and
       ! file_exists ("/pad/sequence/types/$type/fixed.php") )
    return; 
 
  $one = "{table}\n\n"
       . "{demo}{sequence loop, from=1, to=10}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
       . "{demo}{sequence loop, from=1, to=10, keep, $type}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
       . "{demo}{sequence loop, from=1, to=10, remove, $type}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
       . "{/table}";

  file_put_contents ( "/app/sequence/keepRemove/{$type}.pad", $one );

?>