<?php
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/security/login/LoginForm.class.php';

class LoginCtrl{
    
    private $form;
    private $msgs;   
   
    
    
    public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new LoginForm();
	}

    function getParamsLogin(){
          $this->form->login = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
          $this->form->password = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
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
                
                    $this->msgs->addError('Nie podano loginu');
                    
            }
            if ( $this->form->password == "") {
                    $this->msgs->addError('Nie podano hasla');
            }

            //nie ma sensu walidować dalej, gdy brak parametrów
            if ($this->msgs->isError()) return false;

           
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

             $this->msgs->addError('Niepoprawny login lub hasło'); 
            return false; 
    }
    
    public function generateView(){
        
        global $conf;
	global $smarty;
	global $role;	
          
            
             if (!$this->validateLogin()) {
            //jeśli błąd logowania to wyświetl formularz z tekstami z $messages

            $smarty->assign('role',$role);
            $smarty->assign('msgs',$this->msgs);
            $smarty->display($conf->root_path.'/app/security/login/login_view.tpl');
            exit();
            } 
             
   	
    }
    
    
}


