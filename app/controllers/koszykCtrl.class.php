<?php


namespace app\controllers;

use core\App;
use core\SessionUtils;

class koszykCtrl {
     
     public function action_koszyk() {
 
 
         $this->generateView(); 
    }
    
    
    
     public function generateView(){
            
           
            
            App::getSmarty()->display("Koszyk_View.tpl");
            
            exit();
   
    }
}


