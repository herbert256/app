<?php
 
  include_once '/pad/sequence/inits/_lib.php';
  include_once '/app/develop/_lib/lib.php';
  
  include '/app/develop/sequence/clean.php';
  include '/app/develop/sequence/actions.php';
  include '/app/develop/sequence/singles.php';

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

?>