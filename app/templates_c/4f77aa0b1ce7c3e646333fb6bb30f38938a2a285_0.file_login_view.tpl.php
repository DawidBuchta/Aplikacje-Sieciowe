<?php
/* Smarty version 5.4.1, created on 2024-11-03 10:49:24
  from 'file:C:\xampp\htdocs\AS\Zad3_szablonowanie_smarty_Buchta/app/security/login_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6727472419e184_36621091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f77aa0b1ce7c3e646333fb6bb30f38938a2a285' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta/app/security/login_view.tpl',
      1 => 1730625068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6727472419e184_36621091 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\app\\security';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>




<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_165526206467274724191ca8_02870777', 'logowanie');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_812801944672747241945c8_16976493', 'Wiadomosci');
?>


<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'logowanie'} */
class Block_165526206467274724191ca8_02870777 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\app\\security';
?>


    <div  class="srodek">
        
        <h3 class="tekst-srodek"> Dane Logowania </h3>
<form action="<?php echo $_smarty_tpl->getValue('_app_root');?>
/app/security/login.php" method="post" class="pure-form pure-form-aligned">
	
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
/* {/block 'logowanie'} */
/* {block 'Wiadomosci'} */
class Block_812801944672747241945c8_16976493 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\app\\security';
?>

    
    
    
      
        
<?php if (((null !== ($_smarty_tpl->getValue('messages') ?? null)))) {?>
   

		<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) >= 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }?>

<?php }?>


<?php
}
}
/* {/block 'Wiadomosci'} */
}
