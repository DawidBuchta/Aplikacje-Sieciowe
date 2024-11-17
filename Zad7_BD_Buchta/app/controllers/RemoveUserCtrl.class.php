<?php
namespace app\controllers;

class RemoveUserCtrl {
    
    private $rec;
    
    
     function getparams() {
        $this->rec= getFromRequest("users");
    }
    
    
    
    
    public function action_RemoveUser()
    {
        
        $this->getparams();
            
        try{
            foreach( $this->rec as $user    )
            {
                $user_id= getDB()->get("uzytkownicy","id_uzytkownika",["login"=>$user]);
                
                
                getDB()->delete("wyniki", ["id_uzytkownika"=>$user_id]);
                getDB()->delete("uzytkownicy",["login"=>$user]);               
            }
            
            getMessages()->addInfo('Użytkownicy zostali usunięci');
        }catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas dodawania uzytkownika');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
        
        
        
        
        $this->generateview();
        
        
        
        
        
    }
    
    
    function generateview()
    {
        
          $users= getDB()->select("uzytkownicy",["login","role","password"]);              
                 getSmarty()->assign('users',$users);
        getSmarty()->display(getConf()->view_root.'/AddUserView.tpl');
        
        
    }
  
}
