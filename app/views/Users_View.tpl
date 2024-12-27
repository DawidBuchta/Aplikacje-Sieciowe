{extends file="main.tpl"}

{block name="content"}  
 <form action="{$conf->action_root}RemoveUser" method="post">         
 <table class="alt mid" style="font-size: 0.8em ;white-space: normal">
     <input type="checkbox" id="scales" name="scales" checked />
    <thead>
            <tr>
                 <th>check</th>
                    <th>Id_uzytkownika</th>
                    <th>Rola</th>
                    <th>Login</th>
                    <th>Imie</th>
                    <th>Nazwisko</th>
                    <th>Miasto</th>
                    <th>Ulica</th>
                    <th>Kod-Pocztowy</th>
                    <th>email</th>
                    <th>Data Stworzenia</th>
                    <th>id_kto_stworzyl</th>
                    <th>data_modyfikacji</th>
                     <th>id_kto zmodyfikowal</th>
            </tr>
    </thead>
    <tbody>
   
        {foreach item=user from=$users}
            
               
            
            <tr>
                <td style="width: 5%">
                 
                
            <input type="checkbox" id={$user['login']} value={$user['login']}  name=users[]>
            <label for={$user['login']}></label>

									
                    
                
                </td>
                {foreach key=key item=item from=$user}
              
                    
             {if ($item!= NULL)}
              <td>{$item}</td>
              {else}
                  <td>brak</td>
              {/if}
                    {/foreach}
            </tr>
    {/foreach}
    </tbody>
</table> 
    <div class="col-12">
            <input type="submit" value="usuń zaznaczone" class="button primary" />
        </div>
         </form>
    
    
    {/block}