<?php

require_once 'Config.class.php';


$conf = new Config();

$conf->root_path = dirname(__FILE__);
$conf->server_name = 'localhost:80';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/AS/Zad4_Kontroler_glowny_Buchta';
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->action_root = $conf->app_root.'/app/ctrl.php?action=';
$conf->action_url = $conf->server_url.$conf->action_root;
$conf->main_url = $conf->root_path.'/templates/main.tpl';

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';

$smarty = new Smarty\Smarty();
$smarty->assign('conf',$conf);
$smarty->assign('_app_url',$conf->app_url);
$smarty->assign('root_path',$conf->root_path);
$smarty->assign('_app_root',$conf->app_root);




?>