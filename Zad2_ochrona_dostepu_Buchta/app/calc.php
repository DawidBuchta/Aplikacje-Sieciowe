<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';


//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';


function getParams(&$kwota,&$lat,&$procent){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lat = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
	$procent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;	
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
function validate(&$kwota,&$lat,&$procent,&$messages){
if ( ! (isset($kwota) && isset($lat) && isset($procent))) {
		
		return false;
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
	if (count ( $messages ) != 0) return false;
	else return true;
}

// 3. wykonaj zadanie jeśli wszystko w porządku

function process(&$kwota,&$lat,&$procent,&$messages,&$wynik,&$kwota_dlugu){
	global $role;
	
	//konwersja parametrów na int
	$kwota = intval($kwota);
	$lat = intval($lat);
	$procent = intval($procent);
	
	if(($role!='admin')&& ($procent<5))
	{
		
		$messages [] = 'Tylko administrator może miec mniejsze oprocentowanie niż 5';
		
	}else{
		
	
	//wykonanie operacji
		$razem_procent=0.01*($procent*$lat);
		$kwota_dlugu=$kwota+($kwota*$razem_procent);
		$kwota_dlugu=round($kwota_dlugu,2);
		$miesiecy=$lat*12;
		$wynik=$kwota_dlugu/$miesiecy;
		$wynik=round($wynik,2);
	}
}


$kwota = null;
$lat = null;
$procent = null;
$wynik = null;
$messages = array();
$kwota_dlugu = null;

getParams($kwota,$lat,$procent);
if ( validate($kwota,$lat,$procent,$messages) ) { // gdy brak błędów
	process($kwota,$lat,$procent,$messages,$wynik,$kwota_dlugu);
}







// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';