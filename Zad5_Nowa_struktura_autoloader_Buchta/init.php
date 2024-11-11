<?php

require_once 'core/Config.class.php';
$conf = new Config();
require_once 'config.php';

function &getConf(){ global $conf; return $conf; }

//załaduj definicję klasy Messages i stwórz obiekt
require_once 'core/Messages.class.php';
$msgs = new Messages();

function &getMessages(){ global $msgs; return $msgs; }
$role='';

//przygotuj Smarty, twórz tylko raz - wtedy kiedy potrzeba
$smarty = null;	
function &getSmarty(){
	global $smarty;
        global $role;
	if (!isset($smarty)){
		//stwórz Smarty i przypisz konfigurację i messages
		include_once getConf()->root_path.'/lib/smarty/libs/Smarty.class.php';
		$smarty = new Smarty\Smarty();
		//przypisz konfigurację i messages
		$smarty->assign('conf',getConf());
		$smarty->assign('msgs',getMessages());
                $smarty->assign('role',$role);
              
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

require_once 'core/functions.php';

$action = getFromRequest('action');