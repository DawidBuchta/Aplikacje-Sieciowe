
{extends file="main.tpl"}


{block name=zawartosc_strony}
   
    <div >
    <form action="{$conf->action_root}AddUser" method="post" >
         <div class="row gtr-uniform gtr-50">
  

        <div class="col-4 col-6-medium col-12-small">
            <label for="id_kwota">Login </label>
            <input id="id_kwota" type="text" name="login"  placeholder="Login"  />
        </div>
        <div class="col-4 col-6-medium col-12-small " >
             <label for="id_lat">Haslo </label>
        <input id ="id_lat" type="text" name="password"   placeholder="Hasło" >
        </div>
        <div class="col-4 col-6-medium col-12-small " >
             <label for="id_procent">Rola </label>
            <select name="rola" id="rola">
               
              <option value="admin">admin</option>
               <option value="user">user</option>
            </select>
        </div>
        <div class="col-12">
            <input type="submit" value="Dodaj" class="button primary" />
             
        </div>
    </form>	
    </div>
   </div>
         <form action="{$conf->action_root}RemoveUser" method="post">         
 <table class="alt">
     <input type="checkbox" id="scales" name="scales" checked />
    <thead>
            <tr>
                 <th>check</th>
                    <th>Login</th>
                    <th>Rola</th>
                    <th>Hasło</th>
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

              <td>{$item}</td>

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
        
        
   {block name=Wiadomosci}     
<div class="messages">
    
    
  
    
{if $msgs->isError()}
 
		
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $msgs->getErrors() as $err}
		{strip}
			<li>{$err}</li>
		{/strip}
		{/foreach}
		</ol>
	

{/if}

{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf ">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}
</div>

{/block}


