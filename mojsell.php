<html>
<head>
	<title> sell.that </title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/zaawansowany.css" />
	<link rel="stylesheet" href="css/mojsell.css" />
	<link rel="stylesheet" href="css/ogl.css" />
	<link rel="Shortcut icon" href="image/logo.png" />
</head>
<body>
<div id="kontener_calosc">
	<div id="kontener_top">
		<a href="ogloszenie.php"><button type="button" name="" value="" class="css3button"> Dodaj ogłoszenie + </button></a>
		<a href="index.php"><img src="image/logo.png"></a>
		<a href="wyloguj.php"><button type="button" name="" value="" class="but_wyloguj"> Wyloguj </button></a>
		<a href="logowanie.php"><button type="button" name="" value="" class="moj_sell"> Mój sell.that </button></a>
	</div>
	<div class="menu">
			<ul>
				<li><a href="mojsell.php">Moje ogłoszenia</a></li>
				<li><a href="mojsell/wiadomosci.php">Wiadomości</a></li>
			</ul>
		</div>
	<div id="kontener_mojsell">
	<!--
		<div class="ogl">
			<img src="image/logo.png">
			<div class="opis">
				<h3>Tytuł,Tytuł,Tytuł,Tytuł,TytułTytuł</h3><h3 class="cena">450zł</h3>
				<a href="usun.php"><button type="button" name="" value="" class="usun"> Usuń </button></a>
			</div>
		</div>
		-->
		<?php
		session_start();
		$wlasciciel=$_SESSION['login'];
		$mysqli = new mysqli('localhost','root','root123','baza');
		$result = $mysqli->query("SELECT * FROM ogloszenia WHERE wlasciciel='$wlasciciel';");	
		$num = $result->num_rows;	
		while($row = mysqli_fetch_assoc($result)) {
		$url=$row["url"];
		$wlasciciel=$row["wlasciciel"];
		$tytul=$row["tytul"];
		$cena=$row["cena"];
		$id=$row["id"];			
			echo"
				<div class='ogl'>
					<img src='$url'>
					<div class='opis'>
					<h3>$tytul</h3><h3 class='cena'>$cena zł</h3>
					<a href='ogloszenia/$id.php'><button type='button' name='' value='' class='ogl_podglad'> Podgląd </button></a>
					<form action='usun.php' method='post'>
					<input type='hidden' name='id' value='$id'>
					<input type='submit' value='Usuń !' class='usun'>
					</form>
					</div>
				</div>
			";
		};
		?>

		
	</div>
</div>	
</div>
</body>
</html>