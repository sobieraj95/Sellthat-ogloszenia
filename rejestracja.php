<html>
<head>
	<title> sell.that </title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/zaawansowany.css" />
	<link rel="Shortcut icon" href="image/logo.png" />
</head>
<body>
<div id="kontener_calosc">
	<div id="kontener_top">
		<a href="ogloszenie.php"><button type="button" name="" value="" class="css3button"> Dodaj ogłoszenie + </button></a>
		<a href="index.php"><img src="image/logo.png"></a>
		<a href="logowanie.php"><button type="button" name="" value="" class="moj_sell"> Mój sell.that </button></a>
	</div>
	<div id="kontener_rejestracja">
	<div id="kontener_input">
	<h2>Formularz rejestracji</h2>
	<form action="rejestracja2.php" method="post">
	<p>Login*: <input class="text" type=text name="login" required maxlength=20/></p>
	<p>Hasło*: <input class="text" type=password name="haslo" required maxlength=20/></p>
	<p>Powtórz hasło*: <input class="text" type=password name="haslo_p" required maxlength=20/></p>
	<p>Email*: <input class="text" type=email name="email" required maxlength=50/></p>
	<p>Powtórz email*: <input class="text" type=email name="email_p" required maxlength=50/></p>
	<p>Imię: <input class="text" type=text name="imie" maxlength=20/></p>
	<p>Telefon*: <input class="text" type=text name="tel" required maxlength=9/></p>
	<p>GG: <input class="text" type=text name="gg" maxlength=10/></p>
	<input type="checkbox" name="check" value="" />* Oświadczam, że zapoznałem się i akceptuję Regulamin serwisu sell.that. Wyrażam zgodę na przetwarzanie moich danych osobowych przez przez sell.that. <br>
	<input type="checkbox" name="check2" value="" />Wyrażam zgodę na przesyłanie mi przez administrację sell.that za pomocą środków komunikacji elektronicznej informacji handlowych (np. newsletterów).
	</div>
	<div id="kontener_objasnienia">
	<p>Hasło umożliwia dostęp do zakładki Mój sell.that, gdzie możesz: </p>
	<p>- edytować lub usuwać swoje ogłoszenia</p>
	<p>- sprawdzić odpowiedzi na swoje ogłoszenia</p>
	<p>- zobaczyć obserwowane ogłoszenia</p>
	<p>Podaj swój adres e-mail i Twoje hasło oraz telefon. Potwierdź klikając w przycisk Utwórz niżej.</p>
	</div>
	<input class="utworz" type=submit value="Zarejestruj ! "/>
	</form>
	</div>
	<div id="kontener_stopka">
	<a href="index.php"><img style="margin-left:60px;"src="image/logo.png"><img style="position:relative; top:25px;"src="image/twoje.png"></a>
	</div>
</div>	
</div>
</body>
</html>