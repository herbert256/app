<?php

  if ( ! isset ( $fromMenu ) )
    return NULL;
  
  $list = array_diff ( scandir ( '/pad/sequence/types' ), [ '.', '..' ] ) ;

  foreach ( $list as $type ) {

    $name = ucfirst ($type);

    $code =   "<?php"
          . "\n"
          . "\n  function padSeqCheck$name ( \$f, \$n ) {"
          . "\n"
          . "\n    if ( file_exists ( \"/pad/sequence/types/$type/bool.php\" ) )"
          . "\n      return padSeqBool$name ( \$n );"
          . "\n"
          . "\n    \$text = padCode ( \"{sequence $type, from=\$f, stop=\$n, try=\$n}{\\\$sequence},{/sequence}\" );"
          . "\n    \$arr  = explode ( ',', \$text );"
          . "\n"
          . "\n    return in_array ( \$n, \$arr );"
          . "\n"  
          . "\n  }"
          . "\n"
          . "\n?>";  

    file_put_contents ( "/pad/sequence/types/$type/check.php", $code );
    
  }

?>