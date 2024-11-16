<?php
// KONTROLER strony kalkulatora

namespace app\controllers;


use app\forms\CalcForm;
use app\transfer\CalcResult;



class CalcCtrl {
    
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $wynik; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->wynik = new CalcResult();
	}
	
    
    function getParams(){
	$this->form->kwota = getFromRequest('kwota');
	$this->form->lat = getFromRequest('lat');
	$this->form->procent = getFromRequest('procent');	
    }

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
    function validate(){
    
    
if ( ! (isset($this->form->kwota) && isset($this->form->lat) && isset($this->form->procent))) {	
		return false;
                
	}
	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $this->form->kwota == "") {
		getMessages()->addError('Nie podano kwoty');
	}
	if ( $this->form->lat == "") {
		getMessages()->addError('Nie podano liczby lat');
	}
	if ( $this->form->procent == "") {
		getMessages()->addError('Nie podano ile procent');
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if ( ! getMessages()->isError()) {
		
		// sprawdzenie, czy $kwota, $lat i $procent są liczbami całkowitymi i mieszcza sie w zakresie
		if ((! is_numeric( $this->form->kwota )) || ($this->form->kwota<1)) {
			getMessages()->addError('Kwota kredytu nie jest liczbą całkowitą lub jest mniejsza od 1'); 
		}
		
		if ((! is_numeric( $this->form->lat )) || (($this->form->lat<1)|| ($this->form->lat>30))) {
			getMessages()->addError('Liczba lat nie jest liczbą całkowitą lub jest po za przedziałem'); 
		}	
		if ((! is_numeric( $this->form->procent )) || (($this->form->procent<1)|| ($this->form->procent>10))) {
                    
                    getMessages()->addError('Liczba procent nie jest liczbą całkowitą lub jest po za przedziałem');
		}

	}
	return ! getMessages()->isError();
}

// 3. wykonaj zadanie jeśli wszystko w porządku

    public function action_calcCompute(){
	
    
        $this->getParams();
	
        if ($this->validate()) {
	//konwersja parametrów na int
	$this->form->kwota = intval($this->form->kwota);
	$this->form->lat = intval($this->form->lat);
	$this->form->procent = floatval($this->form->procent);
        
       
	
            if((inRole('user'))&& ($this->form->procent<5))
            {

                     getMessages()->addError('Tylko doradca może dać mniejsze oprocentowanie niż 5 procent');

            }else{

             getMessages()->addInfo('Parametry poprawne.');
            //wykonanie operacji
                    $razem_procent=0.01*($this->form->procent*$this->form->lat);
                    $this->wynik->kwota_dlugu=$this->form->kwota+($this->form->kwota*$razem_procent);
                    $this->wynik->kwota_dlugu=round($this->wynik->kwota_dlugu,2);
                    $miesiecy=$this->form->lat*12;
                    $this->wynik->wynik=$this->wynik->kwota_dlugu/$miesiecy;
                    $this->wynik->wynik=round($this->wynik->wynik,2);

            getMessages()->addInfo('Wykonano obliczenia.');
            }
        }
        $this->generateView();
    }

    public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}




    public function generateView(){
		
		
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		getSmarty()->assign('page_title','Super kalkulator - role');
	
					
                getSmarty()->assign('wynik',$this->wynik);
                getSmarty()->assign('form',$this->form);
                
		
		getSmarty()->display(getConf()->view_root.'/CalcView.tpl');
	}

}



?>