<html>
<head>
	<title> sell.that </title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/zaawansowany.css" />
	<link rel="stylesheet" href="css/wyniki.css" />
	<link rel="stylesheet" href="css/nowe_wyszukaj.css" />
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
	
	

	<div class="kontener_wyniki2">
	<a href="index.php"><button type="button" name="" value="" class="butt_cofnij"> Powrót </button></a>
	<h2>Wyniki wyszukiwania:</h2>
	<?php
		$sort=$_POST['sort'];
		$cena_od=$_POST['cena_od'];
		$cena_do=$_POST['cena_do'];	
		$mysqli = new mysqli('localhost','root','root123','baza');

		if($sort=='cena_mal')
			$result = $mysqli->query("Select * From (Select * From ogloszenia Where tytul Like '%{$_POST['wyszukaj_to']}%' Or opis Like '%{$_POST['wyszukaj_to']}%') AS podzap WHERE cena BETWEEN $cena_od AND $cena_do ORDER BY cena DESC");	
		else if($sort=='cena_ros')
			$result = $mysqli->query("Select * From (Select * From ogloszenia Where tytul Like '%{$_POST['wyszukaj_to']}%' Or opis Like '%{$_POST['wyszukaj_to']}%') AS podzap WHERE cena BETWEEN $cena_od AND $cena_do ORDER BY cena ASC");
		else if($sort=='wyswietlenia_mal')
			$result = $mysqli->query("Select * From (Select * From ogloszenia Where tytul Like '%{$_POST['wyszukaj_to']}%' Or opis Like '%{$_POST['wyszukaj_to']}%') AS podzap WHERE cena BETWEEN $cena_od AND $cena_do ORDER BY wyswietlenia DESC");
		else if($sort=='wyswietlenia_ros')
			$result = $mysqli->query("Select * From (Select * From ogloszenia Where tytul Like '%{$_POST['wyszukaj_to']}%' Or opis Like '%{$_POST['wyszukaj_to']}%') AS podzap WHERE cena BETWEEN $cena_od AND $cena_do ORDER BY wyswietlenia ASC");
		
		while($row = mysqli_fetch_assoc($result)) {
			$url=$row["url"];
			$tytul=$row["tytul"];
			$cena=$row["cena"];
			$id=$row["id"];
			echo"
				<div class='wyn_ogl'>
					<img src='$url'>
					<div class='wyn_opis'>
					<h3 class='wyn_tytul'>$tytul</h3><h3 class='wyn_cena'>$cena zł</h3>
					<a href='ogloszenia/$id.php'><button type='button' name='' value='' class='podglad'> Zobacz </button></a>
					</div>
				</div><br>
			";
		};
		?>
	</div>	
	</div>
</body>
</html>		
