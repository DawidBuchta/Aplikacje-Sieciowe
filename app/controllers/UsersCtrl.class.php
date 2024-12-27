<?php


namespace app\controllers;

use core\App;
use core\SessionUtils;

class UsersCtrl {
    
     public function action_wyswietl() {
 
     $users = App::getDB()->select("uzytkownicy",
             ["[><]role"=>["id_Roli"=>"id_Roli"]],
             [
                  "uzytkownicy.id_uzytkownika",
                 "role.nazwa_roli",
                 "uzytkownicy.login",
                 "uzytkownicy.imie",
                 "uzytkownicy.Nazwisko",
                 "uzytkownicy.Miasto",
                 "uzytkownicy.Ulica",
                 "uzytkownicy.KodPocztowy",
                 "uzytkownicy.email",
                 "uzytkownicy.data_stworzenia",
                 "uzytkownicy.id_kto_stw",
                 "uzytkownicy.data_modyfikacji",
                 "uzytkownicy.id_kto_modf",
                ]);
     
             
       
       
  
              
        $user = SessionUtils::loadObject('user',true);
        App::getSmarty()->assign('user',$user);
        App::getSmarty()->assign('users',$users);
        App::getSmarty()->display("Users_View.tpl");
        
    }
}
