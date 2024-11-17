<?php
/* Smarty version 5.4.1, created on 2024-11-11 16:46:14
  from 'file:C:\xampp\htdocs\AS\Zad5_Nowa_struktura_autoloader_Buchta/app/views/login_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673226c67de652_14217713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e097278e2df9c19337d7d28908a735e74a9ccbcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Zad5_Nowa_struktura_autoloader_Buchta/app/views/login_view.tpl',
      1 => 1731339972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673226c67de652_14217713 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad5_Nowa_struktura_autoloader_Buchta\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>




<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1111322385673226c67d3628_26437057', 'zawartosc_strony');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_634438773673226c67d69f8_47576543', 'Wiadomosci');
?>


<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'zawartosc_strony'} */
class Block_1111322385673226c67d3628_26437057 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad5_Nowa_struktura_autoloader_Buchta\\app\\views';
?>


    <div  class="srodek">
        
        <h3 class="tekst-srodek"> Dane Logowania </h3>
<form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
Zaloguj" method="post" class="pure-form pure-form-aligned">
	
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
<?php
}
}
/* {/block 'zawartosc_strony'} */
/* {block 'Wiadomosci'} */
class Block_634438773673226c67d69f8_47576543 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad5_Nowa_struktura_autoloader_Buchta\\app\\views';
?>

    
    
    
      
     
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


<?php
}
}
/* {/block 'Wiadomosci'} */
}
