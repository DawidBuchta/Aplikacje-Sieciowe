<?php

define('_SERVER_NAME', 'localhost:80');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/AS/Zad3_szablonowanie_Smarty_Buchta');
define('_APP_URL', _SERVER_URL._APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));

require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';
$smarty = new Smarty\Smarty();
$smarty->assign('_app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('_app_root', _APP_ROOT);
$smarty->assign('page_title','PSZablonowanie Smarty');
$smarty->assign('page description','Kalkulator kredytowy smarty');
$smarty->assign('page_header','SZablony smarty');


?>