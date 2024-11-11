<?php
require_once 'init.php';

session_start();
$role = isset($_SESSION['role']) ? $_SESSION['role'] : null;

//2. wykonanie akcji
switch ($action) {
	default : // 'calcView'
	    // załaduj definicję kontrolera
                include getConf()->ctrl_root.'/Check_ctrl.php';

		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		// załaduj definicję kontrolera
		include_once getConf()->ctrl_root.'/CalcCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process ();
	break;
	case 'Wyloguj' :
		session_start();
                session_destroy();
               header("Location:".getConf()->action_url.'Zaloguj'); 
	break;
	case 'Zaloguj' :
		include getConf()->ctrl_root.'/Check_ctrl.php';
	break;
       
}
