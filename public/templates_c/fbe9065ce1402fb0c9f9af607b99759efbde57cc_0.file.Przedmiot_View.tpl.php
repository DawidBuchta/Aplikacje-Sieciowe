<?php
/* Smarty version 4.3.4, created on 2024-11-30 17:48:24
  from 'C:\xampp\htdocs\AS\Sklep_Internetowy\amelia\app\views\Przedmiot_View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_674b41d8372940_22591101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe9065ce1402fb0c9f9af607b99759efbde57cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Sklep_Internetowy\\amelia\\app\\views\\Przedmiot_View.tpl',
      1 => 1732984913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674b41d8372940_22591101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <!-- image -->
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1817878276674b41d8368f41_49044733', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_1817878276674b41d8368f41_49044733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1817878276674b41d8368f41_49044733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
<section>
        <h3>Produkty</h3>
        <h4>Wszystkie</h4>
        <div class="box alt">
                <div class="row gtr-50 gtr-uniform">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['przedmiot']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <div class="col-4 col-6-xsmall przedmiot">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Przedmiot&id=<?php echo $_smarty_tpl->tpl_vars['item']->value["id_przedmiot"];?>
">
                            <span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value["wartosc"];?>
" alt="" /></span>
                            <label class="tekst-srodek"> <?php echo $_smarty_tpl->tpl_vars['item']->value["nazwa"];?>
</label>
                            <p class="tekst-srodek">cena: <?php echo $_smarty_tpl->tpl_vars['item']->value["cena"];?>
</p>
                            </a> 
                        </div>
                     
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div>
        </div>

</section>
<?php
}
}
/* {/block "content"} */
}
