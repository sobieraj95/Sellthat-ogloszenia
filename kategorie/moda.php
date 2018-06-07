<html>
<head>
	<title> sell.that </title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/zaawansowany.css" />
	<link rel="stylesheet" href="../css/ogloszenie.css" />
	<link rel="stylesheet" href="../css/kategorie.css" />
	<link rel="Shortcut icon" href="../image/logo.png" />
</head>
<body>	
	<div id="kontener_calosc">
	
		<div id="kontener_top">
			<a href="../ogloszenie.php"><button type="button" name="" value="" class="css3button"> Dodaj ogłoszenie + </button></a>
			<a href="../index.php"><img src="../image/logo.png"></a>
			<a href="../wyloguj.php"><button type="button" name="" value="" class="but_wyloguj"> Wyloguj </button></a>
			<a href="../logowanie.php"><button type="button" name="" value="" class="moj_sell"> Mój sell.that </button></a>
		</div>
		
		<h2 style="margin-left:20px">Moda - wyniki wyszukiwania:</h2>
		<?php 
		session_start();
		if(!(isset($_SESSION['logged'])))
		header( 'Location: http://localhost/sprzedaj.to/logowanie.php' );
	
			$wlasciciel=$_SESSION['login'];
			$mysqli = new mysqli('localhost','root','root123','baza');		
			$result=$mysqli->query("SELECT * FROM ogloszenia WHERE kategoria='moda';");
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
						<a href='../ogloszenia/$id.php'><button type='button' name='' value='' class='ogl_podglad'> Podgląd </button></a>
						</div>
					</div>
				";
			};
		?>

			
		
	</div>	
</body>

</html>