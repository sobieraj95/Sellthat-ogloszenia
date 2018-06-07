<?php
	$mysqli = new mysqli('localhost','root','root123','baza');
	//$polaczenie=mysql_connect('localhost','root','root123');
	//$db=mysql_select_db('BAZA',$polaczenie);
	$login=$_POST['login'];
	$haslo=$_POST['haslo'];
	$result = $mysqli->query("SELECT login FROM users WHERE login='$login' AND haslo='$haslo' LIMIT 1");
        if($result->num_rows > 0) {
            // jeśli tak to ustawiamy sesje "logged" na true oraz
            $row = $result->fetch_assoc();
			session_start();
            $_SESSION['logged'] = true;
			$_SESSION['login']=$login;
			header( 'Location: http://localhost/sprzedaj.to/mojsell.php' );
        } else {
			setcookie('bledne_dane','a');
			header( 'Location: http://localhost/sprzedaj.to/logowanie.php' );
		};
	?>