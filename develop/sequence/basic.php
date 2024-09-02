<?php
 
  if ( in_array ( $type, ['pull','oeis','list','range','eval','random'] ) )
    return include '/app/develop/sequence/special.php';

  if ( $type == 'sylvester' ) $count = 3;
  else                        $count = 10;

  $one  = "{table}\n\n";
  $one .= "{demo}{sequence rows=$count}\n  {\$sequence}\n{/sequence}{/demo}\n\n";
  $one .= "{demo}{sequence $type$parm, rows=$count}\n  {\$sequence}\n{/sequence}{/demo}\n\n";
  $one .= "{/table}";

  file_put_contents ( "/pad/sequence/types/$type/flags/basic", 1 );
  file_put_contents ( "/app/sequence/basic/{$type}.pad", $one );

?>