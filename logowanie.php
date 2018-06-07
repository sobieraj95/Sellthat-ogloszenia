<html>
<head>
	<title> sell.that </title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/zaawansowany.css" />
	<link rel="stylesheet" href="css/logowanie.css" />
	<link rel="Shortcut icon" href="image/logo.png" />
</head>
<body>
<?php
session_start();
if((isset($_SESSION['logged'])))
	header( 'Location: http://localhost/sprzedaj.to/mojsell.php' );
?>
<div id="kontener_calosc">
	<div id="kontener_top">
		<a href="ogloszenie.php"><button type="button" name="" value="" class="css3button"> Dodaj ogłoszenie + </button></a>
		<a href="index.php"><img src="image/logo.png"></a>
		<a href="logowanie.php"><button type="button" name="" value="" class="moj_sell"> Mój sell.that </button></a>
	</div>
	<div id="kontener_logowanie">
	<center><h2>Formularz logowania</h2></center>
	<form action="logowanie2.php" method="post">
	<p>Login: <input class="text" type=text name="login" maxlength="50" required/></p>
	<p>Hasło: <input class="text" type=password name="haslo" required/></p>
	<input class="zaloguj" type=submit value="Zaloguj"/>
	</form>
	<center><h3>Nie masz konta? Zarejestruj się !</h3></center>
	<a href="rejestracja.php"><button type="button" name="" value="" class="przenies_rej"> Przenieś do rejestracji </button></a>
	</div>
	<div id="kontener_stopka_log">
	<a href="index.php"><img style="margin-left:60px;"src="image/logo.png"><img style="position:relative; top:25px;"src="image/twoje.png"></a>
	</div>
	<?php 
			if(isset($_COOKIE['bledne_dane'])){
				echo"<p style='color:red; position:absolute; top:182px; left:323px;'>Błedne dane logowania !</p>";
				setcookie ('bledne_dane', '', time() - 3600);
				};
			?>
</div>
</body>
</html>