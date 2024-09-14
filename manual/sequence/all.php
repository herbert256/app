<?php
 
  include_once '/app/develop/_lib/lib.php';

  echo "{table}{demo}{sequence 15}\n  {\$sequence}\n{/sequence}{/demo}";

  foreach ( padTypes () as $type ) {

    $parm = include '/app/develop/sequence/parm.php';

    if     ( $type == 'pull'      ) continue;
    elseif ( $type == 'oeis'      ) $go = "15, oeis=87";
    elseif ( $type == 'list'      ) $go = "list='1;8;5;2;9;66'";
    elseif ( $type == 'range'     ) $go = "range='1..15'";
    elseif ( $type == 'eval'      ) $go = "15, eval='@ * 10 | @ - 1'";
    elseif ( $type == 'random'    ) $go = '15, random, min=100, max=199';
    elseif ( $type == 'sylvester' ) $go = '10, sylvester';
    else                            $go = "15, $type$parm";

    echo "{demo}{sequence $go}\n  {\$sequence}\n{/sequence}{/demo}";
  }
  
  echo "{/table}";

?>