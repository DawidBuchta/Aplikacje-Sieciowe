<?php
require_once dirname(__FILE__).'/../../config.php';
require_once $conf->root_path.'/app/security/login/LoginCtrl.class.php';
//inicjacja mechanizmu sesji
session_start();

//pobranie roli
 $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
//jeśli brak parametru (niezalogowanie) to idź na stronę logowania
if ( empty($role) ){
	
    $login = new LoginCtrl();
    
    echo $login->validateLogin();
    
    $login->generateView();
    
    
}

//jeśli ok to idź dalej


