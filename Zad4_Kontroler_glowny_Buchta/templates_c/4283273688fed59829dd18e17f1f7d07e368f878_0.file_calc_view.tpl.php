<?php
/* Smarty version 5.4.1, created on 2024-11-06 20:28:22
  from 'file:C:\xampp\htdocs\AS\Zad3_szablonowanie_smarty_Buchta/app/calc_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672bc3563640d0_70981876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4283273688fed59829dd18e17f1f7d07e368f878' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta/app/calc_view.tpl',
      1 => 1730631815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672bc3563640d0_70981876 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>





<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_287283787672bc356194727_99070666', 'kalkulator');
?>
        
        
        
   <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_94812259672bc3562dba62_68585941', 'Wiadomosci');
?>



<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'kalkulator'} */
class Block_287283787672bc356194727_99070666 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\app';
?>

   <div >
    <form action="<?php echo $_smarty_tpl->getValue('_app_url');?>
/app/calc.php" method="post" >
         <div class="row gtr-uniform gtr-50">


        <div class="col-4 col-6-medium col-12-small">
            <label for="id_kwota">Kwota Kredytu </label>
            <input id="id_kwota" type="text" name="kwota" value="<?php if (((null !== ($_smarty_tpl->getValue('form')['kwota'] ?? null)))) {
echo $_smarty_tpl->getValue('form')['kwota'];
}?>" placeholder="Kwota Kredytu"  />
        </div>
        <div class="col-4 col-6-medium col-12-small " >
             <label for="id_lat">Ile Lat (1-30) </label>
        <input id ="id_lat" type="text" name="lat"  value="<?php if (((null !== ($_smarty_tpl->getValue('form')['lat'] ?? null)))) {
echo $_smarty_tpl->getValue('form')['lat'];
}?>" placeholder="liczba lat" >
        </div>
        <div class="col-4 col-6-medium col-12-small " >
             <label for="id_procent">Na ile procent (1-10) </label>
            <input id ="id_procent" type="text" name="procent" value="<?php if (((null !== ($_smarty_tpl->getValue('form')['procent'] ?? null)))) {
echo $_smarty_tpl->getValue('form')['procent'];
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
/* {/block 'kalkulator'} */
/* {block 'Wiadomosci'} */
class Block_94812259672bc3562dba62_68585941 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\app';
?>
     
<div class="messages">
    
    
  
    
<?php if (((null !== ($_smarty_tpl->getValue('messages') ?? null)))) {?>
 
		<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?> 
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

<?php }
if ((null !== ($_smarty_tpl->getValue('wynik') ?? null))) {?>
  
	<h4>Wynik</h4>
	<p class="res col-6">
            Kwota Kredytu: <?php echo $_smarty_tpl->getValue('kwota_dlugu');?>
 
	
        </p><p class="res col-6">
        Miesieczna rata: <?php echo $_smarty_tpl->getValue('wynik');?>

        
        </p>
	
<?php }?>
</div>

<?php
}
}
/* {/block 'Wiadomosci'} */
}
