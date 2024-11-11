<?php
namespace app\controllers;

use app\forms\LoginForm;



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

           
            if ($this->form->login == "admin" && $this->form->password == "admin") {
                    session_start();
                    $_SESSION['role'] = 'admin';
                   
                    return true;
            }
            if ($this->form->login == "user" && $this->form->password == "user") {
                    session_start();
                    $_SESSION['role'] = 'user';
                   
                    return true;
            }

             getMessages()->addError('Niepoprawny login lub hasło'); 
            return false; 
    }
    
    public function generateView(){
        
	
          
            
             if (!$this->validateLogin()) {
            //jeśli błąd logowania to wyświetl formularz z tekstami z $messages

            
            getSmarty()->display(getConf()->view_root.'/login_view.tpl');
            exit();
            }else{
               
                header("Location:".getConf()->action_url.'calc'); 
            }
             
   	
    }
    
    
}


