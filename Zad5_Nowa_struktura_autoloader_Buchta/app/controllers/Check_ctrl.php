<?php

namespace app\controllers;


//inicjacja mechanizmu sesji


//jeśli brak parametru (niezalogowanie) to idź na stronę logowania
if ( empty($role)) {
	
    $login = new LoginCtrl();
    
    
    $login->generateView();

    exit();
} 

//jeśli ok to idź dalej


