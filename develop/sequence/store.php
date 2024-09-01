<?php
 
  if ( $type == 'random' or $type == 'pull' or $build == 'fixed' or $build == 'order' )
    return;

  $sequence = ucfirst( $type );

  if ( $parm ) {

    $one = "{table}\n\n"
         . "{demo}{sequence '2..5',   name='one'}{/demo}\n\n"
         . "{demo}{sequence '11..14', name='two'}{/demo}\n\n"
         . "{demo}{sequence one}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{demo}{sequence two}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{demo}{sequence one, store$sequence='two'}{/demo}\n\n"
         . "{demo}{sequence two}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{/table}";    

    file_put_contents ( "/pad/sequence/types/$type/flags/storeDouble", 1 );
    file_put_contents ( "/app/sequence/store/double/{$type}.pad", $one );
  
  } else {

    $one = "{table}\n\n"
         . "{demo}{sequence '3..10', name='one'}{/demo}\n\n"
         . "{demo}{sequence one}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{demo}{sequence one, store$sequence='two'}{/demo}\n\n"
         . "{demo}{sequence two}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
         . "{/table}";    

    file_put_contents ( "/pad/sequence/types/$type/flags/storeSingle", 1 );
    file_put_contents ( "/app/sequence/store/single/{$type}.pad", $one );

  }


?>