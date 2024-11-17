<?php
/* Smarty version 5.4.1, created on 2024-11-17 16:45:30
  from 'file:C:\xampp\htdocs\AS\Zad7_BD_Buchta/app/views/AddUserView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673a0f9a168322_81227454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fec34a8ccbb9bcef0cc72f69ff5265d80a1af65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Zad7_BD_Buchta/app/views/AddUserView.tpl',
      1 => 1731858318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673a0f9a168322_81227454 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad7_BD_Buchta\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1044032287673a0f9a14f701_89912955', 'zawartosc_strony');
?>
        
        
        
   <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_613979745673a0f9a15e676_69431594', 'Wiadomosci');
?>



<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'zawartosc_strony'} */
class Block_1044032287673a0f9a14f701_89912955 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad7_BD_Buchta\\app\\views';
?>

   
    <div >
    <form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
AddUser" method="post" >
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
         <form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
RemoveUser" method="post">         
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
   
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), 'user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user')->value) {
$foreach0DoElse = false;
?>
            <tr>
                <td style="width: 5%">
                 
                
            <input type="checkbox" id=<?php echo $_smarty_tpl->getValue('user')['login'];?>
 value=<?php echo $_smarty_tpl->getValue('user')['login'];?>
  name=users[]>
            <label for=<?php echo $_smarty_tpl->getValue('user')['login'];?>
></label>

									
                    
                
                </td>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user'), 'item', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>

              <td><?php echo $_smarty_tpl->getValue('item');?>
</td>

                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tr>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
</table> 
    <div class="col-12">
            <input type="submit" value="usuń zaznaczone" class="button primary" />
        </div>
         </form>
<?php
}
}
/* {/block 'zawartosc_strony'} */
/* {block 'Wiadomosci'} */
class Block_613979745673a0f9a15e676_69431594 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad7_BD_Buchta\\app\\views';
?>
     
<div class="messages">
    
    
  
    
<?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
 
		
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach2DoElse = false;
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
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('inf')->value) {
$foreach3DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('inf');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>
</div>

<?php
}
}
/* {/block 'Wiadomosci'} */
}
