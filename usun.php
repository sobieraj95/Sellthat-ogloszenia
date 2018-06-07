<?php
	$mysqli = new mysqli('localhost','root','root123','baza');
	$id=$_POST['id'];
	$mysqli->query("DELETE FROM ogloszenia WHERE id='$id';");
	unlink("ogloszenia/$id.php");
	unlink("upload/$id.png");
	unlink("upload/$id.jpg");
	header( 'Location: http://localhost/sprzedaj.to/mojsell.php' );
?>