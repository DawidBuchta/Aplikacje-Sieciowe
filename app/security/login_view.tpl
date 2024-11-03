<!DOCTYPE HTML>

{extends file="../../templates/main.tpl"}


{block name=logowanie}

    <div  class="srodek">
        
        <h3 class="tekst-srodek"> Dane Logowania </h3>
<form action="{$_app_root}/index.php" method="post" class="pure-form pure-form-aligned">
	
            <div class="pure-control-group"
		<label for="id_login">Login: </label>
		<input id="id_login" type="text" name="login" placeholder ="login"  />
            </div>
            <div class="pure-control-group"
		<label for="id_pass">Hasło: </label>
		<input id="id_pass" type="password" name="pass" placeholder ="haslo" />
            </div>
	
            <div class="pure-control-group">
             <input type="submit" value="zaloguj" class="button primary"/>
            </div>
      
</form>	
                <div>            
{/block}

{block name=Wiadomosci}
    
    
    
      
        
{if (isset($messages[0]))}
   
		{if count($messages) >= 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}

{/if}


{/block}

