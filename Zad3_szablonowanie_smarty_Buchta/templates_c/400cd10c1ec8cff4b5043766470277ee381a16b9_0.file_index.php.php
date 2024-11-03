<?php
/* Smarty version 5.4.1, created on 2024-11-03 11:12:12
  from 'file:C:\xampp\htdocs\AS\Zad3_szablonowanie_smarty_Buchta/index.php' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67274c7c2e7627_51017938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '400cd10c1ec8cff4b5043766470277ee381a16b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta/index.php',
      1 => 1488477142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67274c7c2e7627_51017938 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta';
echo '<?php'; ?>

require_once dirname(__FILE__).'/config.php';

//przekierowanie przeglądarki klienta (redirect)
//header("Location: "._APP_URL."/app/calc.php");

//przekazanie żądania do następnego dokumentu ("forward")
include _ROOT_PATH.'/app/calc.php';<?php }
}
