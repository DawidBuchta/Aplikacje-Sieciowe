<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';


// 1. pobranie parametrów

$kwota = $_REQUEST ['kwota'];
$lat = $_REQUEST ['lat'];
$procent = $_REQUEST ['procent'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($lat) && isset($procent))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $lat == "") {
	$messages [] = 'Nie podano liczby lat';
}
if ( $procent == "") {
	$messages [] = 'Nie podano ile procent';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $kwota, $lat i $procent są liczbami całkowitymi i mieszcza sie w zakresie
	if ((! is_numeric( $kwota )) || ($kwota<1)) {
		$messages [] = 'Kwota kredytu nie jest liczbą całkowitą lub jest mniejsza od 1';
	}
	
	if ((! is_numeric( $lat )) || (($lat<1)|| ($lat>30))) {
		$messages [] = 'Liczba lat nie jest liczbą całkowitą lub jest po za przedziałem';
	}	
	if ((! is_numeric( $procent )) || (($procent<1)|| ($procent>10))) {
		$messages [] = 'Liczba procent nie jest liczbą całkowitą lub jest po za przedziałem';
	}

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$kwota = intval($kwota);
	$lat = intval($lat);
	$procent = intval($procent);
	
	//wykonanie operacji
		$razem_procent=0.01*($procent*$lat);
		$kwota_dlugu=$kwota+($kwota*$razem_procent);
		$kwota_dlugu=round($kwota_dlugu,2);
		$miesiecy=$lat*12;
		$wynik=$kwota_dlugu/$miesiecy;
		$wynik=round($wynik,2);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
include 'calc_view.php';
