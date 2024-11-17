<?php
/* Smarty version 5.4.1, created on 2024-11-11 19:43:06
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6732503a7055a7_58372144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e62fea42b0ba4c7de44f579672881626042bb5c' => 
    array (
      0 => 'main.tpl',
      1 => 1731345149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6732503a7055a7_58372144 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad6_Ochrona_z kontrolerem_routing_Buchta\\app\\views\\templates';
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
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_root;?>
/assets/css/main.css" />
                 <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_root;?>
/assets/css/noscript.css" /></noscript>
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_root;?>
/css/style.css">	
        </head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">Landed</a></h1>
					<nav id="nav">
                                            <ul>
                                                       <?php if (!((null !== ($_smarty_tpl->getValue('role') ?? null)))) {?>
                                                           <li> <a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
Zaloguj" class="button primary">Zaloguj </a> </li>
                                                        
                                                        
                                                           <?php } else { ?>
                                                             
                                                            <li ><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
Wyloguj" >Wyloguj</a></li>
                                                         
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12033574166732503a703140_60719542', 'zawartosc_strony');
?>
      
                                      
                          
                                               <!-- Wiaodomości -->
                                               
                                            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11002331036732503a7044e1_18774478', 'Wiadomosci');
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
/* {block 'zawartosc_strony'} */
class Block_12033574166732503a703140_60719542 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad6_Ochrona_z kontrolerem_routing_Buchta\\app\\views\\templates';
?>
 <?php
}
}
/* {/block 'zawartosc_strony'} */
/* {block 'Wiadomosci'} */
class Block_11002331036732503a7044e1_18774478 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad6_Ochrona_z kontrolerem_routing_Buchta\\app\\views\\templates';
?>
 hello<?php
}
}
/* {/block 'Wiadomosci'} */
}
