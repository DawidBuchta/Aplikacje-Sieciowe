<?php
/* Smarty version 5.4.1, created on 2024-11-03 11:27:38
  from 'file:C:\xampp\htdocs\AS\Zad3_szablonowanie_smarty_Buchta\app\../templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6727501a13a5b4_22647973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd894ee745bd85252f10b40272b3681cd0b2f782e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\app\\../templates/main.tpl',
      1 => 1730629654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6727501a13a5b4_22647973 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>


<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elements - Landed by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('_app_root');?>
/assets/css/main.css" />
                 <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('_app_root');?>
/assets/css/noscript.css" /></noscript>
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('_app_root');?>
/css/style.css">	
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">Landed</a></h1>
					<nav id="nav">
                                            <ul>
                                                       <?php if (((null !== ($_smarty_tpl->getValue('role') ?? null)))) {?>
                                                       <a href="<?php echo $_smarty_tpl->getValue('_app_root');?>
/index.php" class="button primary">Zaloguj</a> 
                                                        
                                                           <?php } else { ?>
                                                            <li style="white-space: nowrap;"> <a href="<?php echo $_smarty_tpl->getValue('_app_root');?>
/app/inna_chroniona.php" >kolejna chroniona strona</a></li>
                                                      
                                                       <li style="white-space: nowrap;" ><a href="<?php echo $_smarty_tpl->getValue('_app_root');?>
/app/security/logout.php" ">Wyloguj</a>
                                                           <?php }?>
                                            </ul>
                                                       
                                        </nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Kalkulator Kredytowy</h2>
						
						</header>
                                            
                                            
                                            
                                            <!-- logowanie -->
                                            
                                            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_15002289986727501a1372b5_87296130', 'logowanie');
?>


						<!-- Kalkulator -->
                                              
                                               
					    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2711277966727501a1399f1_49078615', 'kalkulator');
?>

                          
                                               <!-- Wiaodomości -->
                                               
                                            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2205839986727501a139ff6_95943591', 'Wiadomosci');
?>

                                            
                                            
					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
					
						<li><a href="https://github.com/DawidBuchta/Aplikacje-Sieciowe" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						
					</ul>
					<ul class="copyright">
						<li>&copy; Dawid Buchta. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'logowanie'} */
class Block_15002289986727501a1372b5_87296130 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\templates';
?>
 <?php
}
}
/* {/block 'logowanie'} */
/* {block 'kalkulator'} */
class Block_2711277966727501a1399f1_49078615 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\templates';
?>
 <?php
}
}
/* {/block 'kalkulator'} */
/* {block 'Wiadomosci'} */
class Block_2205839986727501a139ff6_95943591 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\templates';
?>
 hello<?php
}
}
/* {/block 'Wiadomosci'} */
}
