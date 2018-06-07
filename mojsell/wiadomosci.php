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
	<div id="kontener_wiadomosci">
		<!--<div class="wiad">
			<div class="do_kogo">
			<h4>Do: bartuus</h4>
			</div>
			<div class="skrot_wiad">
			<h4>Przykladowy tytul wiadomosci, blabalbalbalblab</h4>
			<form action='pokaz_wiecej.php' method='post'>
				<input type='hidden' name='' value='$odbiorca'>
				<input type='submit' value='Rozwiń' class='pokaz_wiecej'>
			</form>
			</div>
		</div>
		-->
		<?php
		session_start();
		$wlasciciel=$_SESSION['login'];
		$mysqli = new mysqli('localhost','root','root123','baza');
		$result=$mysqli->query("SELECT * FROM wiadomosci WHERE rozmowcy Like '%{$wlasciciel}%';");
		while($row = mysqli_fetch_assoc($result)) {
			$rozmowcy=$row["rozmowcy"];
			$nadawca=$row["nadawca"];
			$odbiorca=$row["odbiorca"];
			$tytul=$row["tytul"];
			echo"
				<div class='wiad'>
			<div class='do_kogo'>
			<h3>Rozmowcy: $nadawca
			$odbiorca
			</h3>
			</div>
			<div class='skrot_wiad'>
			<h3>$tytul</h3>
			<form action='pokaz_wiecej.php' method='post'>
				<input type='hidden' name='rozmowa' value=$rozmowcy>
				<input type='submit' value='Rozwiń' class='pokaz_wiecej'>
			</form>
			</div>
		</div>
			";
		};
		?>
		<a href="nowa_wiadomosc.php"><button type="button" name="" value="" class="nowa_wiadomosc"> Nowa wiadomość </button></a>
	</div>
</div>	
</div>
</body>
</html>