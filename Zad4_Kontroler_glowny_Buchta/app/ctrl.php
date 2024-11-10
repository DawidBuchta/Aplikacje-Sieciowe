<?php
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

//każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
// - w tym wypadku jest już tylko jeden punkt wejścia do aplikacji - skrypt ctrl.php
require_once dirname (__FILE__).'/../config.php';

include $conf->root_path.'/app/security/Check_ctrl.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

//2. wykonanie akcji
switch ($action) {
	default : // 'calcView'
	    // załaduj definicję kontrolera
		include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new CalcCtrl ();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		// załaduj definicję kontrolera
		include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
	break;
	case 'Wyloguj' :
		include $conf->root_path."/app/security/login/logout.php";
	break;
	case 'Zaloguj' :
		include $conf->root_path.'/app/security/Check_ctrl.php';
	break;
       
}
