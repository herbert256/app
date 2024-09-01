<?php
 
  if ( $type == 'random' or $type == 'pull' or $build == 'fixed' or $build == 'order' )
    return include '/app/develop/sequence/special.php';

  if ( $type == 'sylvester' ) $count = 3;
  else                        $count = 10;

  $basic = "{demo}{sequence $count, $type$parm}\n  {\$sequence}\n{/sequence}{/demo}\n\n";

  $one = "{table}\n\n$basic{/table}";

  file_put_contents ( "/pad/sequence/types/$type/flags/basic", 1 );
  file_put_contents ( "/app/sequence/basic/{$type}.pad", $one );

?>