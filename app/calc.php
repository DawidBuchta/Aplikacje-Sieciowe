<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';


//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';


function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['lat'] = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
	$form['procent'] = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;	
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
function validate(&$form,&$messages){
if ( ! (isset($form['kwota']) && isset($form['lat']) && isset($form['procent']))) {	
		return false;
                
	}
	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['kwota'] == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $form['lat'] == "") {
		$messages [] = 'Nie podano liczby lat';
	}
	if ( $form['procent'] == "") {
		$messages [] = 'Nie podano ile procent';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (empty( $messages )) {
		
		// sprawdzenie, czy $kwota, $lat i $procent są liczbami całkowitymi i mieszcza sie w zakresie
		if ((! is_numeric( $form['kwota'] )) || ($form['kwota']<1)) {
			$messages [] = 'Kwota kredytu nie jest liczbą całkowitą lub jest mniejsza od 1';
		}
		
		if ((! is_numeric( $form['lat'] )) || (($form['lat']<1)|| ($form['lat']>30))) {
			$messages [] = 'Liczba lat nie jest liczbą całkowitą lub jest po za przedziałem';
		}	
		if ((! is_numeric( $form['procent'] )) || (($form['procent']<1)|| ($form['procent']>10))) {
			$messages [] = 'Liczba procent nie jest liczbą całkowitą lub jest po za przedziałem';
		}

	}
	if (count ( $messages ) != 0) return false;
	else return true;
}

// 3. wykonaj zadanie jeśli wszystko w porządku

function process(&$form,&$messages,&$wynik,&$kwota_dlugu){
	global $role;
	
	//konwersja parametrów na int
	$form['kwota'] = intval($form['kwota']);
	$form['lat'] = intval($form['lat']);
	$form['procent'] = floatval($form['procent']);
	
	if(($role!='admin')&& ($form['procent']<5))
	{
		
		$messages [] = 'Tylko doradca może dać mniejsze oprocentowanie niż 5 procent';
		
	}else{
		
	
	//wykonanie operacji
		$razem_procent=0.01*($form['procent']*$form['lat']);
		$kwota_dlugu=$form['kwota']+($form['kwota']*$razem_procent);
		$kwota_dlugu=round($kwota_dlugu,2);
		$miesiecy=$form['lat']*12;
		$wynik=$kwota_dlugu/$miesiecy;
		$wynik=round($wynik,2);
	}
}


$wynik = null;
$messages = array();
$kwota_dlugu = null;
$info=array();
$form =array();

getParams($form);
if ( validate($form,$messages) ) { // gdy brak błędów
	process($form,$messages,$wynik,$kwota_dlugu);
}

//conf


//zmienne
$smarty->assign('wynik',$wynik);
$smarty->assign('messages',$messages);
$smarty->assign('kwota_dlugu',$kwota_dlugu);
$smarty->assign('info',$info);
$smarty->assign('form',$form);

//wyswietlanie
$smarty->display(_ROOT_PATH.'/app/calc_view.tpl');

?>