<?php
/* Smarty version 4.3.4, created on 2024-12-27 18:23:36
  from 'C:\xampp\htdocs\AS\Sklep_Internetowy\amelia\app\views\Users_View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_676ee298bef2c4_68726017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dff80b519f89c1e014a46419bbb0f3225170528' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Sklep_Internetowy\\amelia\\app\\views\\Users_View.tpl',
      1 => 1735320213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_676ee298bef2c4_68726017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2132251812676ee298be3731_65043276', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_2132251812676ee298be3731_65043276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2132251812676ee298be3731_65043276',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
 <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
RemoveUser" method="post">         
 <table class="alt mid" style="font-size: 0.8em ;white-space: normal">
     <input type="checkbox" id="scales" name="scales" checked />
    <thead>
            <tr>
                 <th>check</th>
                    <th>Id_uzytkownika</th>
                    <th>Rola</th>
                    <th>Login</th>
                    <th>Imie</th>
                    <th>Nazwisko</th>
                    <th>Miasto</th>
                    <th>Ulica</th>
                    <th>Kod-Pocztowy</th>
                    <th>email</th>
                    <th>Data Stworzenia</th>
                    <th>id_kto_stworzyl</th>
                    <th>data_modyfikacji</th>
                     <th>id_kto zmodyfikowal</th>
            </tr>
    </thead>
    <tbody>
   
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            
               
            
            <tr>
                <td style="width: 5%">
                 
                
            <input type="checkbox" id=<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
 value=<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
  name=users[]>
            <label for=<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
></label>

									
                    
                
                </td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
              
                    
             <?php if (($_smarty_tpl->tpl_vars['item']->value != NULL)) {?>
              <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
              <?php } else { ?>
                  <td>brak</td>
              <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table> 
    <div class="col-12">
            <input type="submit" value="usuń zaznaczone" class="button primary" />
        </div>
         </form>
    
    
    <?php
}
}
/* {/block "content"} */
}
