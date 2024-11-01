<?php

  foreach ( glob ( '/pad/sequence/one/types/*.php' ) as $file ) {

    $single = str_replace ( '/pad/sequence/one/types/', '', $file   );
    $single = str_replace ( '.php',                     '', $single );

    $extra = ( $single == 'element') ? '|3' : '';

    $code = "{table}\n\n"
          . "{demo}{sequence '40..60', one='$single$extra'}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
          . "{/table}";

    file_put_contents ( "/app/sequence/one/$single.pad", $code );

  }

?>