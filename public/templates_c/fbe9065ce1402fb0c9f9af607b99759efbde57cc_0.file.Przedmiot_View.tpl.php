<?php
/* Smarty version 4.3.4, created on 2024-12-27 20:20:01
  from 'C:\xampp\htdocs\AS\Sklep_Internetowy\amelia\app\views\Przedmiot_View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_676efde1d10f59_56640976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe9065ce1402fb0c9f9af607b99759efbde57cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Sklep_Internetowy\\amelia\\app\\views\\Przedmiot_View.tpl',
      1 => 1735327199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_676efde1d10f59_56640976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <!-- image -->
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1470325828676efde1d075b7_79500100', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_1470325828676efde1d075b7_79500100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1470325828676efde1d075b7_79500100',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
<section>
        <h3>Produkt</h3>
        <div class="box alt">
                <div class="row gtr-50 gtr-uniform">

                    
                        <div class="col-4 col-6-xsmall przedmiot">
                            <a>
                            <span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['zdjecie']->value;?>
" alt="" /></span>
                            <p class="tekst-srodek"> <?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["Nazwa"];?>
</p>
                            </a> 
                        </div>
                            <div class="col-1">    
                                 
                              <a href="#" class= "icon solid alt fa-cart-plus fa-4x" ></a>  
                            
                         
                              <br></br>
                            <b> <p class="tekst-srodek">cena:<?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["cena"];?>
</p></b>
                        </div>
                             <div class="col-7 col-6-xsmall ">    
                                 
                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['atrybuty']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                     <p class="tekst-srodek"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['atrybut'];?>
</b> <?php echo $_smarty_tpl->tpl_vars['item']->value['wartosc'];?>
</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                         
                         <div class="col-12 przedmiot">    
                                 
                                 
                            <p class="tekst-srodek"><?php echo $_smarty_tpl->tpl_vars['przedmiot']->value["opis"];?>
</p>
                         
                        </div>
                     
                

                </div>
        </div>

</section>
<?php
}
}
/* {/block "content"} */
}
