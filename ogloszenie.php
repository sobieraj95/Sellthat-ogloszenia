<html>
<head>
	<title> sell.that </title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/zaawansowany.css" />
	<link rel="stylesheet" href="css/ogloszenie.css" />
	<link rel="Shortcut icon" href="image/logo.png" />
</head>
<body>

<?php
session_start();
if(!(isset($_SESSION['logged'])))
	header( 'Location: http://localhost/sprzedaj.to/logowanie.php' );
?>
<div id="kontener_calosc">
	<div id="kontener_top">
		<a href="ogloszenie.php"><button type="button" name="" value="" class="css3button"> Dodaj ogłoszenie + </button></a>
		<a href="index.php"><img src="image/logo.png"></a>
		<a href="logowanie.php"><button type="button" name="" value="" class="moj_sell"> Mój sell.that </button></a>
	</div>
	
	<div id="kontener_ogloszenie">
	<div id="kontener_input_ogloszenie">
	<h2>Formularz dodawania ogloszenia</h2>
	<form action="ogloszenie2.php" method="post" enctype="multipart/form-data">
	<p>Tytuł*: <input class="text" type=text name="tytul" maxlength="30" required/></p>
	<p>Dodaj zdjęcie* <input class="text" type=file name="plik"/></p>
	<p>Cena*: <input class="text" type=num min='0' max='99999999' name="cena" required/></p>
	<p>Kategoria*: 
	<select name="kategoria" class=text style=width:300px; required>
	  <option value="elektronika">Elektronika</option>
	  <option value="motoryzacja">Motoryzacja</option>
	  <option value="dom">Dom i ogród</option>
	  <option value="praca">Praca</option>
	  <option value="zamienie">Zamienię</option>
	  <option value="zwierzeta">Zwierzęta</option>
	  <option value="moda">Moda</option>
	  <option value="rolnictwo">Rolnictwo</option>
	  <option value="dzieci">Dla dzieci</option>
	</select>
	<p>Opis*: <textarea class="opis" name="opis" maxlength="500" required/></textarea></p>
	<p>Imię: <input class="text" type=text name="imie" maxlength="50"/></p>
	<p>Telefon*: <input class="text" type=text name="telef" maxlength="9" required/></p>
	<p>GG: <input class="text" type=text name="ggg"maxlength="10"/></p>
	</div>
	<input class="dodaj_ogl" type=submit value="Dodaj ogłoszenie"/>
	</form>
	</div>
	<div id="kontener_stopka_ogl">
	<a href="index.php"><img style="margin-left:60px;"src="image/logo.png"><img style="position:relative; top:25px;"src="image/twoje.png"></a>
	</div>
</div>	
</div>
</body>
</html>