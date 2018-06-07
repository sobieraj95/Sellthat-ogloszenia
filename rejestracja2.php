<?php
$login=$_POST['login'];
$haslo=$_POST['haslo'];
$haslop=$_POST['haslo_p'];
$email=$_POST['email'];
$emailp=$_POST['email_p'];
$imie=$_POST['imie'];
$tel=$_POST['tel'];
$gg=$_POST['gg'];
$mysqli = new mysqli('localhost','root','root123','baza');
// ----------------- SPRAWDZENIE LOGINÓW ---------------
$result = $mysqli->query("SELECT login FROM users WHERE login ='$login'");
$result2 = $mysqli->query("SELECT email FROM users WHERE email ='$email'");
if ($result->num_rows==0)
	{
		if ($result2->num_rows==0)
		$wynik="INSERT INTO users(login,haslo,email,imie,tel,gg) VALUES ('$login','$haslo','$email','$imie','$tel','$gg')";
		else{
			//-------- TWORZENIE CIASTKA GDY EMAIL ZAJETY ---------
			setcookie('zajety_email','a');
			header( 'Location: http://localhost/sprzedaj.to/rejestracja.php' );
			
		};
	}else{
	//-------- TWORZENIE CIASTKA GDY LOGIN ZAJETY ---------
	setcookie('zajety_login','a');
	header( 'Location: http://localhost/sprzedaj.to/rejestracja.php' );	
	};
	$mysqli->query($wynik);
	header( 'Location: http://localhost/sprzedaj.to/index.php' );
?>