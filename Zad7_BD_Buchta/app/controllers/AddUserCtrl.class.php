<?php

namespace app\controllers;



use app\forms\UserForm;

class AddUserCtrl {
    
    private $form;
  
    
    function __construct() {
        $this->form = new UserForm();
    }
    
    function getParams(){
	$this->form->login = getFromRequest('login');
	$this->form->role = getFromRequest('rola');
	$this->form->password = getFromRequest('password');	
    }
    
    function validate()
    {
        $this->getParams();
        
       
        $isAcc= getDB()->has("uzytkownicy",["login"=>$this->form->login]);    
         $db_roles= getDB()->select("uzytkownicy", "role");
        
        
            // sprawdzenie, czy parametry zostały przekazane
            if ( ! (isset($this->form->login) && isset($this->form->password))) {
                    //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
                    return false;
            }
             if ($isAcc) {
                     getMessages()->addError('Uzytkownik o podanym loginie istnieje');
            }

            // sprawdzenie, czy potrzebne wartości zostały przekazane
            if ( $this->form->login == "") {
                
                getMessages()->addError('Nie podano loginu');
                    
            }
            if ( $this->form->password == "") {
                    getMessages()->addError('Nie podano hasla');
            }
             if ( $this->form->role == "") {
                    getMessages()->addError('Nie podano roli');
            }
            $found=false;
            foreach($db_roles as $role)
            {
                if($this->form->role==$role)
                    $found=true;  
            }
            
            if(!$found)
            {
                getMessages()->addError('Rola nie znajduje się w systemie');
                
            }
            
         
            return ! getMessages()->isError();
    }
    
    
    function action_AddUser(){
        
        
        if($this->validate()){
        try {
                
                getDB()->insert("uzytkownicy",[
                    "login"=>$this->form->login , 
                    "password"=>$this->form->password ,
                     "role"=>$this->form->role
                    
                    
                    ]);
              $this->form->login="";

			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas dodawania uzytkownika');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
        
        
        
        
        getMessages()->addInfo('Dodano użytkownika');
        }
        
       return $this->generateView();
    }
    
    
     public function action_AddUserShow(){
		getMessages()->addInfo('Proszę dodać użytkownika');
		$this->generateView();
	}
        
         public function generateView(){
		
                $users= getDB()->select("uzytkownicy",["login","role","password"]);              
                 getSmarty()->assign('users',$users); 
		getSmarty()->display(getConf()->view_root.'/AddUserView.tpl');
	}
    
     
        
        
        
        
        
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
