<?php

  foreach ( glob ( '/pad/sequence/after/singles/types/*.php' ) as $file ) {

    $single = str_replace ( '/pad/sequence/after/singles/types/', '', $file   );
    $single = str_replace ( '.php',                               '', $single );

    $code = "{table}\n\n"
          . "{demo}{sequence '40..60', single='$single'}\n  {\$sequence}\n{/sequence}{/demo}\n\n"
          . "{/table}";

    file_put_contents ( "/app/sequence/singles/$single.pad", $code );

  }

?>