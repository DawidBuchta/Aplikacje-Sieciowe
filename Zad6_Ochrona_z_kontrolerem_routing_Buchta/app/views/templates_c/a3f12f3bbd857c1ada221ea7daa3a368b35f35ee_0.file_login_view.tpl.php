<?php
/* Smarty version 5.4.1, created on 2024-11-10 14:46:33
  from 'file:C:\xampp\htdocs\AS\Zad4_Kontroler_glowny_Buchta/app/security/login/login_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6730b939b80dd1_94824794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3f12f3bbd857c1ada221ea7daa3a368b35f35ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Zad4_Kontroler_glowny_Buchta/app/security/login/login_view.tpl',
      1 => 1731246255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6730b939b80dd1_94824794 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad4_Kontroler_glowny_Buchta\\app\\security\\login';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>




<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_824252296730b939b76aa6_29763857', 'zawartosc_strony');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6821226486730b939b796c7_62588868', 'Wiadomosci');
?>


<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, $_smarty_tpl->getValue('conf')->main_url, $_smarty_current_dir);
}
/* {block 'zawartosc_strony'} */
class Block_824252296730b939b76aa6_29763857 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad4_Kontroler_glowny_Buchta\\app\\security\\login';
?>


    <div  class="srodek">
        
        <h3 class="tekst-srodek"> Dane Logowania </h3>
<form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
Login" method="post" class="pure-form pure-form-aligned">
	
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
class Block_6821226486730b939b796c7_62588868 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad4_Kontroler_glowny_Buchta\\app\\security\\login';
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
