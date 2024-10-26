<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<title>Kalkulator Kredytowy</title>
</head>
<body>
<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>
<div style="width:90%; margin: 2em auto;">
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<label for="id_kwota">Kwota kredytu </label>
	<input id="kwota" type="number" name="kwota" value="<?php print($kwota);?>" min="1" /><br />
	<label for="id_lat">liczba lat 1-30 </label>
	<input id ="lat" type="number" name="lat" min=1 max=30 value="<?php print($lat);?>" ><br />
	<label for="id_procent">Oprocentowanie R/R 1-10 </label>
	<input id ="procent" type="number" name="procent" min="1" max="10" value="<?php print($procent);?>"><br />
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($wynik)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php 
		echo 'Łączna kwota kredytu to: '.$kwota_dlugu.'</br>'; 
		echo 'Miesieczna rata to: '.$wynik.'</br>';




 ?>
</div>
<?php } ?>

</div>

</body>
</html>