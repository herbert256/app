<?php

  if ( ! isset ( $fromMenu ) )
    return NULL;

  if     ( $type == 'pull'    ) return '';
  elseif ( $type == 'oeis'    ) $go = "15, oeis=87";
  elseif ( $type == 'list'    ) $go = "list='1;8;5;2;9;66'";
  elseif ( $type == 'range'   ) $go = "range='1..10'";
  elseif ( $type == 'eval'    ) $go = "15, eval='@ * 10 | @ - 1'";
  elseif ( $type == 'random'  ) $go = '15, random, min=100, max=199';
  else {

    include '/app/develop/sequencesCheck.php';

    if ( $e or $a == $b ) $go = "15, $type";
    else                  $go = "15, $type=5";

  }

  $one = "{table}{demo}{sequence $go}\n  {\$sequence}\n{/sequence}{/demo}{/table}";

  file_put_contents ( "/app/sequence/$type.pad", $one );

?>