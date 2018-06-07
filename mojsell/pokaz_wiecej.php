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
	<?php
		session_start();
		$wlasciciel=$_SESSION['login'];
		$rozmowcy=$_POST['rozmowa'];
		$mysqli = new mysqli('localhost','root','root123','baza');
		$result=$mysqli->query("SELECT * FROM wiadomosci WHERE rozmowcy Like '%{$rozmowcy}%'  ;");
		$num = $result->num_rows;
		while($row = mysqli_fetch_assoc($result)) {
			$nadawca=$row["nadawca"];
			$odbiorca=$row["odbiorca"];
			$tresc=$row["tresc"];
			
			echo"
			<div class='wiad'>
			<div class='do_kogo'>
			<h3>Rozmowcy: $nadawca
			$odbiorca
			</h3>
			<div class='skrot_wiad'>
			<h3>$tresc</h3>
			</div>
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