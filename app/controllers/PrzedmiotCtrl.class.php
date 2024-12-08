<?php


namespace app\controllers;
use core\App;
use core\przedmiot;

class PrzedmiotCtrl {
    
    
        
    
     public function action_Przedmiot() {
		        
        $id_przedmiot= $_GET['id'];
     $przedmiot = App::getDB()->select(
             "przedmioty",
             ["[><]atrybuty"=>["id_przedmiot"=>"id_spec"]],
             ["przedmioty.id_przedmiot","przedmioty.cena","atrybuty.wartosc","przedmioty.nazwa"],
             ["przedmioty.id_przedmiot"=>$id_przedmiot]);
       
                
                
              
        
        
        
        App::getSmarty()->assign("przedmiot",$przedmiot);
        App::getSmarty()->display("Przedmiot_View.tpl");
        
    }
    
    
    
}
