<?php
 
  if ( $type == 'random' or $type == 'pull' or $build == 'fixed' or $build == 'order' )
    return;

  if ( $parm ) {

    $one = "{table}\n\n"
         . "{demo}{sequence '11..14', name='one'}{/demo}\n\n"
         . "{demo}{sequence '2..5',   name='two'}{/demo}\n\n"
         . "{demo}{sequence one}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{demo}{sequence two}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{demo}{sequence one, $type='two'}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{/table}";    

    file_put_contents ( "/pad/sequence/types/$type/flags/operationDouble", 1 );
    file_put_contents ( "/app/sequence/operation/double/{$type}.pad", $one );

  } 

?>