<?php
/* Smarty version 5.4.1, created on 2024-11-03 10:49:24
  from 'file:C:\xampp\htdocs\AS\Zad3_szablonowanie_smarty_Buchta\app\security\../../templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67274724236c28_96305992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2c0ab46b9d3d3ef3dd846c76d7884e659f6017e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\app\\security\\../../templates/main.tpl',
      1 => 1730627357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67274724236c28_96305992 (\Smarty\Template $_smarty_tpl) {
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
					<h1 id="logo"><a href="main.html">Landed</a></h1>
					<nav id="nav">
                                            <ul>
                                                      
                                                       <a href="<?php echo $_smarty_tpl->getValue('_app_root');?>
/app/calc.php" class="button primary">Zaloguj</a> 
                                                        <?php if (!((null !== ($_smarty_tpl->getValue('role') ?? null)))) {?> 
                                                           
                                                            <li style="white-space: nowrap;"> <a href="<?php echo $_smarty_tpl->getValue('_app_root');?>
/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a></li>
                                                      
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_49648922867274724235a40_30004069', 'logowanie');
?>


						<!-- Kalkulator -->
                                              
                                               
					    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1895837839672747242360d4_56279958', 'kalkulator');
?>

                          
                                               <!-- Wiaodomości -->
                                               
                                            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_80825961267274724236637_26461072', 'Wiadomosci');
?>

                                            
                                            
					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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
class Block_49648922867274724235a40_30004069 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\templates';
?>
 <?php
}
}
/* {/block 'logowanie'} */
/* {block 'kalkulator'} */
class Block_1895837839672747242360d4_56279958 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\templates';
?>
 <?php
}
}
/* {/block 'kalkulator'} */
/* {block 'Wiadomosci'} */
class Block_80825961267274724236637_26461072 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\AS\\Zad3_szablonowanie_smarty_Buchta\\templates';
?>
 hello<?php
}
}
/* {/block 'Wiadomosci'} */
}
