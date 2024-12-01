 <!-- image -->
 {extends file="main.tpl"}
 {block name="content"}  
<section>
        <h3>Produkty</h3>
        <h4>Wszystkie</h4>
        <div class="box alt">
                <div class="row gtr-50 gtr-uniform">

                    {foreach $przedmiot as $item}
                        <div class="col-4 col-6-xsmall przedmiot">
                            <a href="{$conf->action_url}Przedmiot&id={$item["id_przedmiot"]}">
                            <span class="image fit"><img src="{$item["wartosc"]}" alt="" /></span>
                            <label class="tekst-srodek"> {$item["nazwa"]}</label>
                            <p class="tekst-srodek">cena: {$item["cena"]}</p>
                            </a> 
                        </div>
                     
                  {/foreach}

                </div>
        </div>

</section>
{/block}