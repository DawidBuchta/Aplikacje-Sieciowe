<?php
namespace app\controllers;

use app\forms\LoginForm;
use app\transfer\User;



class LoginCtrl{
    
    private $form;  
   
    
    
    public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new LoginForm();
	}

    function getParamsLogin(){
          $this->form->login = getFromRequest('login');
          $this->form->password = getFromRequest('pass');
    }
    
    function isaccount($login,$password)
    {
        if(getDB()->has("uzytkownicy",["AND"=>["login"=>$login,"password"=>$password]])){
              return true; 
        }else
                    return false;   
    }

    //walidacja parametrów z przygotowaniem zmiennych dla widoku
    public function validateLogin(){
        
        $this->getParamsLogin();
        
        
            // sprawdzenie, czy parametry zostały przekazane
            if ( ! (isset($this->form->login) && isset($this->form->password))) {
                    //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
                    return false;
            }

            // sprawdzenie, czy potrzebne wartości zostały przekazane
            if ( $this->form->login == "") {
                
                getMessages()->addError('Nie podano loginu');
                    
            }
            if ( $this->form->password == "") {
                    getMessages()->addError('Nie podano hasla');
            }

            //nie ma sensu walidować dalej, gdy brak parametrów
            if (getMessages()->isError()) return false;

           
            if ($this->isaccount($this->form->login, $this->form->password)) {
                    global $user;
                   $data_user=getDB()->get("uzytkownicy","*",["AND"=>["login"=>$this->form->login,"password"=>$this->form->password]]);
                   $user = new User($data_user["login"],$data_user["role"],$data_user["id_uzytkownika"]);
                    $_SESSION['user'] = serialize(getUser());
                    addRole(getUser()->role);
                    
                   
                   
                  
                   
                   
            
                     
            }else
            {
                getMessages()->addError('Niepoprawny login lub hasło'); 
            }
            return ! getMessages()->isError();
    }
    
    public function action_login(){

		$this->getParamsLogin();
		
		if ($this->validateLogin()){
			//zalogowany => przekieruj na stronę główną, gdzie uruchomiona zostanie domyślna akcja
			header("Location: ".getConf()->app_url."/");
		} else {
			//niezalogowany => wyświetl stronę logowania
			$this->generateView(); 
		}
		
	}
        
    public function action_logout(){
		// 1. zakończenie sesji - tylko kończymy, jesteśmy już podłączeni w init.php
                unset($_SESSION);
		session_destroy();
		
		// 2. wyświetl stronę logowania z informacją
		getMessages()->addInfo('Poprawnie wylogowano z systemu');

		$this->generateView();		 
	}
    
   public function generateView(){
            
            
            
            getSmarty()->display(getConf()->view_root.'/login_view.tpl');
            exit();
   
    }
}


