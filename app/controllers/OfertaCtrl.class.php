<?php


namespace app\controllers;
use core\App;
use core\przedmiot;

class OfertaCtrl {
    
    
        
    
     public function action_Oferta() {
		        
        
     $przedmiot = App::getDB()->select("przedmioty",["[><]atrybuty"=>["id_spec"=>"id_spec"]],["przedmioty.id_przedmiot","przedmioty.cena","atrybuty.wartosc","przedmioty.nazwa"]);
       
                
                
              
        
        
        
        App::getSmarty()->assign("przedmiot",$przedmiot);
        App::getSmarty()->display("Oferta_View.tpl");
        
    }
    
    
    
}
