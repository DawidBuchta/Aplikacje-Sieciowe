<?php


$conf->root_path = dirname(__FILE__);
$conf->server_name = 'localhost:80';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/AS/Zad6_Ochrona_z_kontrolerem_routing_Buchta';
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->action_root = $conf->app_root.'/ctrl.php?action=';
$conf->action_url = $conf->server_url.$conf->action_root;
$conf->ctrl_root = $conf->root_path.'/app/controllers';
$conf->view_root = $conf->root_path.'/app/views';



