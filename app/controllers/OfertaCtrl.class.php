<?php


namespace app\controllers;
use core\App;
use core\SessionUtils;

class OfertaCtrl {
    
    
        
    
     public function action_Oferta() {
		        
        
     $przedmiot = App::getDB()->select("przedmioty",["[><]atrybuty"=>["id_przedmiot"=>"id_spec"]],["przedmioty.id_przedmiot","przedmioty.cena","atrybuty.wartosc","przedmioty.nazwa"]);
       
                
                
              
        $user = SessionUtils::loadObject('user',true);
        App::getSmarty()->assign('user',$user);
        App::getSmarty()->assign("przedmiot",$przedmiot);
        App::getSmarty()->display("Oferta_View.tpl");
        
    }
    
    
    
}
