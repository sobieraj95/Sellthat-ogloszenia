<?php
	session_start();
	session_destroy();
	header( 'Location: http://localhost/sprzedaj.to/index.php' );
?>