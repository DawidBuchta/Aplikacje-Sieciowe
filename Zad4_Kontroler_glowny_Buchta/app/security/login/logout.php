<?php
require_once dirname(__FILE__).'/../../../config.php';
global $conf;
// 1. zakończenie sesji
session_start();
session_destroy();

// 2. przekieruj lub "forward" na stronę główną
//redirect

//header("google.com");
//"forward"
include $conf->root_path."/app/ctrl.php";