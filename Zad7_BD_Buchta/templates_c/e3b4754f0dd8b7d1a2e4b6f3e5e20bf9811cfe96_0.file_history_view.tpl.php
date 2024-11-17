<?php
/* Smarty version 5.4.1, created on 2024-11-17 17:08:40
  from 'file:history_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673a15087e6914_17796719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3b4754f0dd8b7d1a2e4b6f3e5e20bf9811cfe96' => 
    array (
      0 => 'history_view.tpl',
      1 => 1731859719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673a15087e6914_17796719 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad7_BD_Buchta\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2131312546673a15087d6e16_42886403', 'zawartosc_strony');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'zawartosc_strony'} */
class Block_2131312546673a15087d6e16_42886403 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad7_BD_Buchta\\app\\views';
?>

<table class="alt">
    
    <?php if (!(null !== ($_smarty_tpl->getValue('records')[0] ?? null))) {?>
        
        
        <div > <h2 style="text-align: center">Brak rekordów do wyświetlenia</h2>  </div>
        
        
        <?php } else { ?>
										<thead>
											<tr>
												<th>Kwota Kredytu</th>
												<th>Ile Lat</th>
												<th>Ile Procent</th>
                                                                                                <th>Kwota Łączna</th>
                                                                                                <th>Miesięczna Rata</th>
											</tr>
										</thead>
										<tbody>
                                                                                    
                                                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('records'), 'record');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('record')->value) {
$foreach0DoElse = false;
?>
											<tr>
                                                                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('record'), 'item', false, 'key');
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
										<tfoot>
											<tr>
												
											</tr>
										</tfoot>
									</table>
<?php }
}
}
/* {/block 'zawartosc_strony'} */
}
