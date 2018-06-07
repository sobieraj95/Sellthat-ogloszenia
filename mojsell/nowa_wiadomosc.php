<html>
<head>
	<title> sell.that </title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/zaawansowany.css" />
	<link rel="stylesheet" href="../css/mojsell.css" />
	<link rel="stylesheet" href="../css/wiadomosci.css" />
	<link rel="Shortcut icon" href="image/logo.png" />
</head>
<body>
<div id="kontener_calosc">
	<div id="kontener_top">
		<a href="../ogloszenie.php"><button type="button" name="" value="" class="css3button"> Dodaj ogłoszenie + </button></a>
		<a href="../index.php"><img src="../image/logo.png"></a>
		<a href="../wyloguj.php"><button type="button" name="" value="" class="but_wyloguj"> Wyloguj </button></a>
		<a href="../logowanie.php"><button type="button" name="" value="" class="moj_sell"> Mój sell.that </button></a>
	</div>
	<div class="menu">
			<ul>
				<li><a href="../mojsell.php">Moje ogłoszenia</a></li>
				<li><a href="../mojsell/wiadomosci.php">Wiadomości</a></li>
			</ul>
	</div>
	<div id="kontener_wiadomosci2">
		<h3>Tworzenie nowej konwersacji:</h3>
		<form action='stworz.php' method='post'>
			<p>Do kogo*: <input class="text" type=text name="do" maxlength="30" required/></p>
			<p>Tytuł*: <input class="text" type=text name="tytul" maxlength="30"required/></p>
			<p style='margin-right:30px;'>Treść*: <textarea class="opis" name="tresc" maxlength="500" required/></textarea></p>
			<input class="wyslij" type=submit value="Wyślij"/>
		</form>
	</div>
</div>	
</body>
</html>