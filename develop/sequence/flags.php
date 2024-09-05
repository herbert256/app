<?php

  deleteDir ( "/pad/sequence/types/$type/flags/" ); 
  mkdir     ( "/pad/sequence/types/$type/flags/" );

  file_put_contents ( "/pad/sequence/types/$type/flags/readme.txt", 'This directory is generared' );

?>