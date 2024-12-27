<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('Oferta'); #default action
//App::getRouter()->setLoginRoute('Login'); #action to forward if no permissions
Utils::addRoute('Login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('Zarejestruj', 'RejestracjaCtrl');

Utils::addRoute('Oferta', 'WyswietlCtrl');
Utils::addRoute('Przedmiot', 'WyswietlCtrl');
Utils::addRoute('wyswietl', 'UsersCtrl');
Utils::addRoute('koszyk', 'koszykCtrl');
//Utils::addRoute('action_name', 'controller_class_name');