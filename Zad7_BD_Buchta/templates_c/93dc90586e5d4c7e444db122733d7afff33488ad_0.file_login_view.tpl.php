<?php
/* Smarty version 5.4.1, created on 2024-11-16 16:46:58
  from 'file:C:\xampp\htdocs\AS\Zad7_BD_Buchta/app/views/login_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6738be722a3729_30749817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93dc90586e5d4c7e444db122733d7afff33488ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Zad7_BD_Buchta/app/views/login_view.tpl',
      1 => 1731703069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6738be722a3729_30749817 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad7_BD_Buchta\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>




<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9405787396738be72293dc1_84353276', 'zawartosc_strony');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_780446246738be72297913_11028965', 'Wiadomosci');
?>


<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'zawartosc_strony'} */
class Block_9405787396738be72293dc1_84353276 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad7_BD_Buchta\\app\\views';
?>


    <div  class="srodek">
        
        <h3 class="tekst-srodek"> Dane Logowania </h3>
<form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
login" method="post" class="pure-form pure-form-aligned">
	
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
class Block_780446246738be72297913_11028965 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad7_BD_Buchta\\app\\views';
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
	

<?php }
if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
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
<?php }?>


<?php
}
}
/* {/block 'Wiadomosci'} */
}
