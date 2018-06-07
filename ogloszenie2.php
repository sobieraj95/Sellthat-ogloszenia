<?php
session_start();
$mysqli = new mysqli('localhost','root','root123','baza');

$tytul=$_POST['tytul'];
//$url=$_POST['url'];
$cena=$_POST['cena'];
$kategoria=$_POST['kategoria'];
$opis=$_POST['opis'];
$imie=$_POST['imie'];
$telef=$_POST['telef'];
$ggg=$_POST['ggg'];
$wlasciciel=$_SESSION['login'];
$max_rozmiar = 1024*1024;
$id_wyjete = $mysqli->query("SELECT MAX(id) FROM ogloszenia;");
$wiersz = mysqli_fetch_array( $id_wyjete );
$wiersz[0] +=1;
if (is_uploaded_file($_FILES['plik']['tmp_name'])) {
    if ($_FILES['plik']['size'] > $max_rozmiar) {
        echo 'Błąd! Plik jest za duży!';
    } else {
        echo 'Odebrano plik. Początkowa nazwa: '.$_FILES['plik']['name'];
        echo '<br/>';
        if (isset($_FILES['plik']['type'])) {
            echo 'Typ: '.$_FILES['plik']['type'].'<br/>';
        }
		if($_FILES['plik']['type']=="image/png"){
			$link="upload/$wiersz[0].png";
		}else if($_FILES['plik']['type']=='image/jpeg'){
			$link="upload/$wiersz[0].jpg";
			move_uploaded_file($_FILES['plik']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/sprzedaj.to/upload/'.$wiersz[0].'.jpg');	
		}	
    }

$mysqli->query("INSERT INTO ogloszenia (`id`,`wlasciciel`,`tytul`,`url`, `cena`, `kategoria`, `opis`, `imie`, `telefon`, `gg`,`wyswietlenia`) VALUES ('$wiersz[0]','$wlasciciel','$tytul','$link','$cena','$kategoria','$opis','$imie','$telef','$ggg',100)");

// ---------------------- ZAPISYWANIE DO PLIKU --------------------


$dane = "
<html>
<head>
	<title> sell.that </title>
	<meta charset='utf-8' />
	<meta name='description' content='' />
	<meta name='keywords' content='' />
	<link rel='stylesheet' href='../css/style.css' />
	<link rel='stylesheet' href='../css/zaawansowany.css' />
	<link rel='stylesheet' href='../css/artykuly.css' />
	<link rel='Shortcut icon' href='../image/logo.png' />
</head>
<body>
<div id='kontener_calosc'>
	<div id='kontener_top'>
		<a href='../ogloszenie.php'><button type='button' name='' value='' class='css3button'> Dodaj ogłoszenie + </button></a>
		<a href='../index.php'><img src='../image/logo.png'></a>
		<a href='../logowanie.php'><button type='button' name='' value='' class='moj_sell'> Mój sell.that </button></a>
	</div>
	
	<div id='kontener_artykul'>
		<h2>$tytul</h2>
		<p>Właściciel: $wlasciciel  |  ID ogłoszenia: $wiersz[0] </p>
		<img src='../$link'/>
		<p class='artykul_opis'> $opis </p>	
	</div>
	
	<div id='kontener_kontakt'>
		<h2 class='cena'>Cena: <br> $cena zł</h2>
		<h2 class='kontakt'>Kontakt tel:<br> $telef </h2>
		<h2 class='kontakt_gg'>Kontakt GG:<br> $ggg </h2>
		<form action='../mojsell/nowa_wiadomosc.php' method='post'>
		<input type='hidden' name='id' value='$wlasciciel'>
		<input type='submit' value='Napisz wiadomość' class='napisz_wiad'>
		
		
	</div>
	
	<div id='kontener_stopka'>
		<a href='../index.php'><img style='margin-left:60px;'src='../image/logo.png'><img style='position:relative; top:25px;'src='../image/twoje.png'></a>
	</div>
</div>	
</body>
</html>
	
"; 

// przypisanie zmniennej $file nazwy pliku 
$file = "ogloszenia/$wiersz[0].php"; 

// uchwyt pliku, otwarcie do dopisania 
$fp = fopen($file, "a"); 

// blokada pliku do zapisu 
flock($fp, 2); 

// zapisanie danych do pliku 
fwrite($fp, $dane); 

// odblokowanie pliku 
flock($fp, 3); 

// zamknięcie pliku 
fclose($fp); 

header( 'Location: http://localhost/sprzedaj.to/mojsell.php' );

} else {
   echo 'Błąd przy przesyłaniu danych!';
}
?>