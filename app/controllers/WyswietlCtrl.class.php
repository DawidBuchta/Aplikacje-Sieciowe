<?php


namespace app\controllers;
use core\App;
use core\przedmiot;
use core\SessionUtils;

class WyswietlCtrl {
    
    
        
    
     public function action_Przedmiot() {
		        
        $id_przedmiot= $_GET['id'];
     $zdjecie = App::getDB()->get("atrybuty","wartosc",
             ["AND"=>[
                 "atrybut"=>"zdjecie",
                 "id_spec"=>$id_przedmiot           
                 ]
                  ]
             );
      $przedmiot = App::getDB()->get("przedmioty",
              ["Nazwa","opis","cena"],
              ["id_przedmiot"=>$id_przedmiot]);
       $atrybuty = App::getDB()->select("atrybuty",["atrybut","wartosc"],
             ["AND"=>[
                 "atrybut[!]"=>"zdjecie",
                 "id_spec"=>$id_przedmiot           
                 ]
                  ]
             );
        
       
        App::getSmarty()->assign("zdjecie",$zdjecie);
        App::getSmarty()->assign("przedmiot",$przedmiot);
        App::getSmarty()->assign("atrybuty",$atrybuty);
        App::getSmarty()->display("Przedmiot_View.tpl");
        
    }
   public function action_Oferta() {
 
     $przedmiot = App::getDB()->select("przedmioty",
             ["[><]atrybuty"=>["id_przedmiot"=>"id_spec"]],
             ["przedmioty.id_przedmiot","przedmioty.cena","atrybuty.wartosc","przedmioty.nazwa"],
             [
                 "AND"=>
                [
                    "atrybuty.atrybut"=>"zdjecie"
                ]
             ]
             );
       
  
              
        $user = SessionUtils::loadObject('user',true);
        App::getSmarty()->assign('user',$user);
        App::getSmarty()->assign("przedmiot",$przedmiot);
        App::getSmarty()->display("Oferta_View.tpl");
        
    }
    
    
    
    
}
