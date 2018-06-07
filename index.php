<html>
<head>
	<title> sell.that </title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/zaawansowany.css" />
	<link rel="stylesheet" href="css/nowe_wyszukaj.css" />
	<link rel="Shortcut icon" href="image/logo.png" />
</head>
<body>
<div id="kontener_calosc">
	<div id="kontener_top">
		<a href="ogloszenie.php"><button type="button" name="" value="" class="css3button"> Dodaj ogłoszenie + </button></a>
		<a href="index.php"><img src="image/logo.png"></a>
		<a href="logowanie.php"><button type="button" name="" value="" class="moj_sell"> Mój sell.that </button></a>
	</div>
	
	<div class="kontener_wyszukiwarka2">
		<div id="wyszukiwarka_wlasciwa">
			<form action='wyszukiwarka.php' method='post'>
				<input id="wyszukaj_input" type=search name='wyszukaj_to'/>
			<br>
			Sortowanie według:<br>
			<input type="radio" id="r1" name="sort" value="cena_mal" />
			<label for="r1"><span></span>Cena malejaco</label><br>
			<input type="radio" id="r2" name="sort" value="cena_ros" checked/>
			<label for="r2"><span></span>Cena rosnąco</label><br>
			<input type="radio" id="r3" name="sort" value="wyswietlenia_mal"/>
			<label for="r3"><span></span>Wyswietl. malejaco</label><br>
			<input type="radio" id="r4" name="sort" value="wyswietlenia_ros"/>
			<label for="r4"><span></span>Wyswietl. rosnąco</label>
			
			<div class="kontener_cena">
				<br><br>
				Cena od:<br>
				<input id="" type=text name='cena_od' value=0 /><br>
				Cena do:<br>
				<input id="" type=text name='cena_do' value=20000000 /><br>
			</div>
			<a href="index.php"><button type="submit" name="" value="" class="wyszukaj"> Wyszukaj </button></a>
			</form>
		</div>
	</div>
	
	<div class="kontener_kategorie2">
		<center>
		<a class="kategoria" href="kategorie/elektronika.php"><img src="image/elektronika.png"></a>
		<a class="kategoria" href="kategorie/motoryzacja.php"><img src="image/motoryzacja.png"></a>
		<a class="kategoria" href="index.php"><img src="image/praca.png"></a>
		<a class="kategoria" href="index.php"><img src="image/dom.png"></a>
		<a class="kategoria" href="index.php"><img src="image/zamienie.png"></a>
		<a class="kategoria" href="index.php"><img src="image/zwierzeta.png"></a>
		<a class="kategoria" href="kategorie/moda.php"><img src="image/moda.png"></a>
		<a class="kategoria" href="index.php"><img src="image/rolnictwo.png"></a>
		<a class="kategoria" href="index.php"><img src="image/dzieci.png"></a>
		</center>
	</div>
	
	<div class="kontener_dodaj2">
		<br><br><h2>Szybko, łatwo i wygodnie</h2><br><br>
		<a href="rejestracja.php"><button type="button" name="" value="" class="stworz_konto"> Załóż konto </button></a>
		<h3>  - darmowa rejestracja</h3>
		<h3>  - zdjęcia przy ogłoszeniu</h3>
		<h3>  - aktywne przez 30 dni</h3>
	</div>
	<hr style="position:absolute; top:600px; margin-left:10%; margin-right:10%;"/>
	<div class="kontener_informacje2">
		sell.that to darmowe ogłoszenia lokalne w kategoriach: Praca, Dom i Ogród, Elektronika, Moda, Rolnictwo, Zwierzęta. Dla Dzieci, Sport i Hobby, Muzyka i Edukacja, Usługi i Firmy. Szybko znajdziesz tu ciekawe ogłoszenia i łatwo skontaktujesz się z ogłoszeniodawcą. Na sell. czeka na Ciebie praca biurowa, mieszkania, pokoje, samochody. Jeśli chcesz coś sprzedać - w prosty sposób dodasz bezpłatne ogłoszenia. Chcesz coś kupić - tutaj znajdziesz ciekawe okazje, taniej niż w sklepie. A wszystkie te ogłoszenia bez konieczności zakładania konta. Sprzedawaj po sąsiedzku na sell.that.
	</div>
	
	<div class="kontener_facebook2">
		<iframe class="facebook_skrypt"
			src="http://www.facebook.com/plugins/like.php?href=https://www.facebook.com/XalionGaming?fref=ts
			&layout=standard&show_faces=true& width=450
			&action=like&colorscheme=light&height=80"
			scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true">
		</iframe>
	</div>
	<div class="kontener_stopka2">
	<a href="index.php"><img style="margin-left:60px;"src="image/logo.png"><img style="position:relative; top:25px;"src="image/twoje.png"></a>
	</div>
</div>	
</body>
</html>