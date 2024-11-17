<?php
session_start();
require_once 'core/Config.class.php';
$conf = new core\Config();
require_once 'config.php';


function &getConf(){ global $conf; return $conf; }

//załaduj definicję klasy Messages i stwórz obiekt
require_once 'core/Messages.class.php';
$msgs = new core\Messages();

function &getMessages(){ global $msgs; return $msgs; }

function &getUser()
{
    global $user;
    return $user;
    
    
}


//przygotuj Smarty, twórz tylko raz - wtedy kiedy potrzeba
$smarty = null;	
function &getSmarty(){
	global $smarty;
        
	if (!isset($smarty)){
            
		//stwórz Smarty i przypisz konfigurację i messages
		include_once getConf()->root_path.'/lib/smarty/libs/Smarty.class.php';
		$smarty = new Smarty\Smarty();
		//przypisz konfigurację i messages
		$smarty->assign('conf',getConf());
		$smarty->assign('msgs',getMessages());
                if(isset($_SESSION['user']))
                {
                $smarty->assign('user',unserialize($_SESSION['user']));
                }
            
              
		//zdefiniuj lokalizację widoków (aby nie podawać ścieżek przy ich załączaniu)
		$smarty->setTemplateDir(array(
			'one' => getConf()->root_path.'/app/views',
			'two' => getConf()->root_path.'/app/views/templates'
		));
	}
	return $smarty;
}
require_once 'core/ClassLoader.class.php'; //załaduj i stwórz loader klas
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}

require_once 'core/Router.class.php'; //załaduj i stwórz router
$router = new core\Router();
function &getRouter(): core\Router {
    global $router; return $router;
}

$db = null; //przygotuj Medoo, twórz tylko raz - wtedy kiedy potrzeba
function &getDB() {
    global $conf, $db;
    if (!isset($db)) {
        require_once 'lib/medoo/Medoo.class.php';
        $db = new \Medoo\Medoo([
            'database_type' => &$conf->db_type,
            'server' => &$conf->db_server,
            'database_name' => &$conf->db_name,
            'username' => &$conf->db_user,
            'password' => &$conf->db_pass,
            'charset' => &$conf->db_charset,
            'port' => &$conf->db_port,
            'prefix' => &$conf->db_prefix,
            'option' => &$conf->db_option
        ]);
    }
    return $db;
}

require_once 'core/functions.php';


$conf->roles = isset($_SESSION['roles']) ? unserialize($_SESSION['roles']) : null; //wczytaj role


$router->setAction( getFromRequest('action') );
