<?php


namespace app\controllers;
use PDOException;

class HistoryCtrl {
    
    
    private $records;
    
    public function action_HistoryList()
    {
       $this->records=null;
        $user=unserialize($_SESSION['user']);
        try{
			$this->records = getDB()->select("wyniki", ["kwota_kredytu","ile_lat","ile_procent","kwota_dlugu","wynik"],["id_uzytkownika"=> $user->getid()]);
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}
        
        
        
        $this->generateView();
        
        
    }
    
    function generateView()
    {
        
        getSmarty()->assign('records',$this->records);
        
        $sad= isset($this->records[0]);
        
        
        getSmarty()->display("history_view.tpl");
        
        
        
        
    }
    
    
    
    
}
