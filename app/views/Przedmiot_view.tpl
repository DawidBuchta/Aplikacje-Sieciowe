 <!-- image -->
 {extends file="main.tpl"}
 {block name="content"}  
<section>
        <h3>Produkt</h3>
        <div class="box alt">
                <div class="row gtr-50 gtr-uniform">

                    
                        <div class="col-4 col-6-xsmall przedmiot">
                            <a>
                            <span class="image fit"><img src="{$zdjecie}" alt="" /></span>
                            <p class="tekst-srodek"> {$przedmiot["Nazwa"]}</p>
                            </a> 
                        </div>
                            <div class="col-1">    
                                 
                              <a href="#" class= "icon solid alt fa-cart-plus fa-4x" ></a>  
                            
                         
                              <br></br>
                            <b> <p class="tekst-srodek">cena:{$przedmiot["cena"]}</p></b>
                        </div>
                             <div class="col-7 col-6-xsmall ">    
                                 
                                 {foreach $atrybuty as $item}
                                     <p class="tekst-srodek"><b>{$item['atrybut']}</b> {$item['wartosc']}</p>
                            {/foreach}
                        </div>
                         
                         <div class="col-12 przedmiot">    
                                 
                                 
                            <p class="tekst-srodek">{$przedmiot["opis"]}</p>
                         
                        </div>
                     
                

                </div>
        </div>

</section>
{/block}