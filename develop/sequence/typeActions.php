<?php
 
  if ( $type == 'random' or $type == 'pull' )
    return;

  if ( $type == 'sylvester' ) $count = 3;
  else                        $count = 10;

  $one = "{table}\n\n";
  foreach ( seqDir ( '/app/manual/sequence/actions/single' ) as $file )
    $one .= "{demo}{sequence $count, $type$parm, $file}\n  {\$sequence}\n{/sequence}{/demo}\n\n";
  $one .= "{/table}";

  file_put_contents ( "/app/sequence/actions/types/single/{$type}.pad", $one );

  $one = '';
  foreach ( seqDir ( '/app/manual/sequence/actions/double' ) as $file ) {

    $store = 'store' . ucfirst ($file);

    if ( $file == 'splice' ) $extra = '5|2|';
    else                     $extra = '';

    $one .= "{table}\n";
    $one .= "{demo}{sequence range='11..20', name='myStore'}{/demo}\n";
    $one .= "{demo}{sequence myStore}\n  {\$sequence}\n{/sequence}{/demo}\n";
    $one .= "{demo}{sequence $count, $type$parm}\n  {\$sequence}\n{/sequence}{/demo}\n";
    $one .= "{demo}{sequence $count, $type$parm, $file='$extra" . "myStore'}\n  {\$sequence}\n{/sequence}{/demo}\n";
    $one .= "{demo}{sequence myStore}\n  {\$sequence}\n{/sequence}{/demo}\n";
    $one .= "{demo}{sequence $count, $type$parm, $store='$extra" . "myStore'}{/demo}\n";
    $one .= "{demo}{sequence myStore}\n  {\$sequence}\n{/sequence}{/demo}\n";
    $one .= "{/table}\n\n";

  }

  file_put_contents ( "/app/sequence/actions/types/double/{$type}.pad", $one );

?>