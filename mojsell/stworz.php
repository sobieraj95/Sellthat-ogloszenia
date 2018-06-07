<?php
session_start();
$data=date('Y-m-d H:i:s');
$mysqli = new mysqli('localhost','root','root123','baza');
$nadawca=$_SESSION['login'];
$odbiorca=$_POST['do'];
$tytul=$_POST['tytul'];
$tresc=$_POST['tresc'];
$rozmowcy=$nadawca.$odbiorca;

$mysqli->query("INSERT INTO `wiadomosci`(`rozmowcy`,`nadawca`, `odbiorca`, `data`, `tytul`, `tresc`) VALUES ('$rozmowcy','$nadawca','$odbiorca','$data','$tytul','$tresc');");
$wynik2 = $mysqli->query("SELECT * FROM wiadomosci WHERE rozmowcy='$rozmowcy'");
$record =  mysqli_num_rows($wynik2);
$_SESSION['tytul_wiad']=$record[0];
header( 'Location: http://localhost/sprzedaj.to/mojsell/wiadomosci.php' );
?>