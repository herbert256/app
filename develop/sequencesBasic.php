<?php
 
  if ( $type == 'random' or $type == 'pull' or $build == 'fixed' or $build == 'order' )
    return include '/app/develop/sequencesSpecial.php';

  $one = "{table}\n\n"
       . "{demo}{sequence 10, $type$parm}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
       . "{/table}";

  file_put_contents ( "/app/sequence/basic/{$type}.pad", $one );

?>