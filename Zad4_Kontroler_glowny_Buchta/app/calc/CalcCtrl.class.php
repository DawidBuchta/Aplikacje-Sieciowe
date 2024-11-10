<?php
// KONTROLER strony kalkulatora


//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include $conf->root_path.'/app/security/check_ctrl.php';


require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';



class CalcCtrl {
    
        private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $wynik; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->wynik = new CalcResult();
	}
	
    
    function getParams(){
	$this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$this->form->lat = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
	$this->form->procent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;	
    }

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
    function validate(){
    
    
if ( ! (isset($this->form->kwota) && isset($this->form->lat) && isset($this->form->procent))) {	
		return false;
                
	}
	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $this->form->kwota == "") {
		$this->msgs->addError('Nie podano kwoty');
	}
	if ( $this->form->lat == "") {
		$this->msgs->addError('Nie podano liczby lat');
	}
	if ( $this->form->procent == "") {
		$this->msgs->addError('Nie podano ile procent');
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if ( ! $this->msgs->isError()) {
		
		// sprawdzenie, czy $kwota, $lat i $procent są liczbami całkowitymi i mieszcza sie w zakresie
		if ((! is_numeric( $this->form->kwota )) || ($this->form->kwota<1)) {
			$this->msgs->addError('Kwota kredytu nie jest liczbą całkowitą lub jest mniejsza od 1'); 
		}
		
		if ((! is_numeric( $this->form->lat )) || (($this->form->lat<1)|| ($this->form->lat>30))) {
			$this->msgs->addError('Liczba lat nie jest liczbą całkowitą lub jest po za przedziałem'); 
		}	
		if ((! is_numeric( $this->form->procent )) || (($this->form->procent<1)|| ($this->form->procent>10))) {
                    
                    $this->msgs->addError('Liczba procent nie jest liczbą całkowitą lub jest po za przedziałem');
		}

	}
	return ! $this->msgs->isError();
}

// 3. wykonaj zadanie jeśli wszystko w porządku

    public function process(){
	global $role;
    
        $this->getParams();
	
        if ($this->validate()) {
	//konwersja parametrów na int
	$this->form->kwota = intval($this->form->kwota);
	$this->form->lat = intval($this->form->lat);
	$this->form->procent = floatval($this->form->procent);
        
       
	
            if(($role!='admin')&& ($this->form->procent<5))
            {

                     $this->msgs->addError('Tylko doradca może dać mniejsze oprocentowanie niż 5 procent');

            }else{

             $this->msgs->addInfo('Parametry poprawne.');
            //wykonanie operacji
                    $razem_procent=0.01*($this->form->procent*$this->form->lat);
                    $this->wynik->kwota_dlugu=$this->form->kwota+($this->form->kwota*$razem_procent);
                    $this->wynik->kwota_dlugu=round($this->wynik->kwota_dlugu,2);
                    $miesiecy=$this->form->lat*12;
                    $this->wynik->wynik=$this->wynik->kwota_dlugu/$miesiecy;
                    $this->wynik->wynik=round($this->wynik->wynik,2);

            $this->msgs->addInfo('Wykonano obliczenia.');
            }
        }
        $this->generateView();
    }






    public function generateView(){
		global $smarty;
		global $conf;
		
		
		
		$smarty->assign('page_title','Przykład 06');
		$smarty->assign('page_description','Aplikacja z jednym "punktem wejścia". Model MVC, w którym jeden główny kontroler używa różnych obiektów kontrolerów w zależności od wybranej akcji - przekazanej parametrem.');
		$smarty->assign('page_header','Kontroler główny');
					
                $smarty->assign('wynik',$this->wynik);
                $smarty->assign('msgs',$this->msgs);
                $smarty->assign('form',$this->form);
		
		$smarty->display($conf->root_path.'/app/calc/CalcView.tpl');
	}

}



?>