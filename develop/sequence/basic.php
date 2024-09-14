<?php

  $one = "{table}\n\n";
 
  if     ( $type == 'pull'      ) return;
  elseif ( $type == 'oeis'      ) $go = "15, oeis=87";
  elseif ( $type == 'list'      ) $go = "list='1;8;5;2;9;66'";
  elseif ( $type == 'range'     ) $go = "range='1..10'";
  elseif ( $type == 'eval'      ) $go = "15, eval='@ * 10 | @ - 1'";
  elseif ( $type == 'random'    ) $go = '15, random, min=100, max=199';
  else                            $go = "15, $type$parm";

  if ( str_starts_with ( $go, '15' ) and $parm )
    $one .= "{demo}{sequence 15}\n  {\$sequence}\n{/sequence}{/demo}\n\n";

  $one .= "{demo}{sequence $go}\n  {\$sequence}\n{/sequence}{/demo}\n\n";

  $one .= "{/table}";

  file_put_contents ( "/app/sequence/basic/{$type}.pad", $one );

?>