<?php
 
  foreach ( glob ( "/xxxxxpad/functions/*.php") as $file)  

  	if ( str_contains ( file_get_contents ( $file), '$parm' ) ) {
      $new = str_replace ( 'functions/', 'functions/parms/', $file);
      copy ( $file, $new );
	  file_put_contents ( $file, "<?php\n\n  return include '$new';\n\n?>");
  	} else {
      $new = str_replace ( 'functions/', 'functions/single/', $file);
      copy ( $file, $new );
	  file_put_contents ( $file, "<?php\n\n  return include '$new';\n\n?>");
  	}

?>