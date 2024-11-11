<?php
/* Smarty version 5.4.1, created on 2024-11-11 12:15:36
  from 'file:C:\xampp\htdocs\AS\Zad5_Nowa_struktura_autoloader_Buchta/app/views/CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6731e7582371e3_18414653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3d031095873ebf0e45dffaa052fc6226556c7b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Zad5_Nowa_struktura_autoloader_Buchta/app/views/CalcView.tpl',
      1 => 1731323734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6731e7582371e3_18414653 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad5_Nowa_struktura_autoloader_Buchta\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12233314446731e7582244b1_52162407', 'zawartosc_strony');
?>
        
        
        
   <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13113438876731e75822e224_70336453', 'Wiadomosci');
?>



<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'zawartosc_strony'} */
class Block_12233314446731e7582244b1_52162407 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad5_Nowa_struktura_autoloader_Buchta\\app\\views';
?>

   <div >
    <form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute" method="post" >
         <div class="row gtr-uniform gtr-50">


        <div class="col-4 col-6-medium col-12-small">
            <label for="id_kwota">Kwota Kredytu </label>
            <input id="id_kwota" type="text" name="kwota" value="<?php if (((null !== ($_smarty_tpl->getValue('form')->kwota ?? null)))) {
echo $_smarty_tpl->getValue('form')->kwota;
}?>" placeholder="Kwota Kredytu"  />
        </div>
        <div class="col-4 col-6-medium col-12-small " >
             <label for="id_lat">Ile Lat (1-30) </label>
        <input id ="id_lat" type="text" name="lat"  value="<?php if (((null !== ($_smarty_tpl->getValue('form')->lat ?? null)))) {
echo $_smarty_tpl->getValue('form')->lat;
}?>" placeholder="liczba lat" >
        </div>
        <div class="col-4 col-6-medium col-12-small " >
             <label for="id_procent">Na ile procent (1-10) </label>
            <input id ="id_procent" type="text" name="procent" value="<?php if (((null !== ($_smarty_tpl->getValue('form')->procent ?? null)))) {
echo $_smarty_tpl->getValue('form')->procent;
}?>" placeholder="procent"><br />
        </div>
        <div class="col-12">
            <input type="submit" value="Oblicz" class="button primary" />
        </div>
    </form>	
    </div>
   </div>
<?php
}
}
/* {/block 'zawartosc_strony'} */
/* {block 'Wiadomosci'} */
class Block_13113438876731e75822e224_70336453 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad5_Nowa_struktura_autoloader_Buchta\\app\\views';
?>
     
<div class="messages">
    
    
  
    
<?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
 
		
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach0DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('err');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
	

<?php }?>

<?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf ">
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'inf');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('inf')->value) {
$foreach1DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('inf');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
<?php }
if ((null !== ($_smarty_tpl->getValue('wynik')->wynik ?? null))) {?>
  
	<h4>Wynik</h4>
	<p class="res ">
            Kwota Kredytu: <?php echo $_smarty_tpl->getValue('wynik')->kwota_dlugu;?>
 
	
        </p><p class="res ">
        Miesieczna rata: <?php echo $_smarty_tpl->getValue('wynik')->wynik;?>

        
        </p>
	
<?php }?>
</div>

<?php
}
}
/* {/block 'Wiadomosci'} */
}
