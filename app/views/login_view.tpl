<!DOCTYPE HTML>

{extends file="main.tpl"}


{block name="content"}

    <div  class="srodek">
        
        <h3 class="tekst-srodek"> Dane Logowania </h3>
<form action="{$conf->action_root}Login" method="post" class="pure-form pure-form-aligned">
	
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
    {foreach $msgs->getMessages() as $msg}
 <div class=" {if $msg->isInfo()}inf{/if}
              {if $msg->isWarning()}alert-warning{/if}
              {if $msg->isError()}err{/if}" role="alert">
    {$msg->text}
 </div>
{/foreach}
    
    
      
     
{*{if $msgs->isError()}
   
		
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
{/if}*}


{/block}
