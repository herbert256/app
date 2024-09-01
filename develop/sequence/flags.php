<?php

  deleteDir  ( "/pad/sequence/types/$type/flags/" ); 
  mkdir      ( "/pad/sequence/types/$type/flags/" );

  if ( file_exists ( "/pad/sequence/types/$type/parm" ) )
    unlink ( "/pad/sequence/types/$type/parm" );

?>