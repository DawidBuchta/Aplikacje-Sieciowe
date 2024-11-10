
{extends file=$conf->main_url}


{block name=zawartosc_strony}
   <div >
    <form action="{$conf->action_root}calcCompute" method="post" >
         <div class="row gtr-uniform gtr-50">


        <div class="col-4 col-6-medium col-12-small">
            <label for="id_kwota">Kwota Kredytu </label>
            <input id="id_kwota" type="text" name="kwota" value="{if (isset($form->kwota))}{$form->kwota}{/if}" placeholder="Kwota Kredytu"  />
        </div>
        <div class="col-4 col-6-medium col-12-small " >
             <label for="id_lat">Ile Lat (1-30) </label>
        <input id ="id_lat" type="text" name="lat"  value="{if (isset($form->lat))}{$form->lat}{/if}" placeholder="liczba lat" >
        </div>
        <div class="col-4 col-6-medium col-12-small " >
             <label for="id_procent">Na ile procent (1-10) </label>
            <input id ="id_procent" type="text" name="procent" value="{if (isset($form->procent))}{$form->procent}{/if}" placeholder="procent"><br />
        </div>
        <div class="col-12">
            <input type="submit" value="Oblicz" class="button primary" />
        </div>
    </form>	
    </div>
   </div>
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
{if isset($wynik->wynik)}
  
	<h4>Wynik</h4>
	<p class="res ">
            Kwota Kredytu: {$wynik->kwota_dlugu} 
	
        </p><p class="res ">
        Miesieczna rata: {$wynik->wynik}
        
        </p>
	
{/if}
</div>

{/block}


