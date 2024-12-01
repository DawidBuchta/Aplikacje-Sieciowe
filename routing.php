<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('Oferta'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('Oferta', 'OfertaCtrl');
Utils::addRoute('Przedmiot', 'PrzedmiotCtrl');
//Utils::addRoute('action_name', 'controller_class_name');