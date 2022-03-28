<?php
/* Smarty version 4.1.0, created on 2022-03-27 16:27:14
  from 'C:\xampp\htdocs\zadania_php\05\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62407442c57449_03807608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e05aec45a7ba8e68336a7b40b343c09aa0daa55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadania_php\\05\\templates\\main.html',
      1 => 1648391228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62407442c57449_03807608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "tytuł" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "opis" ?? null : $tmp);?>
" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
        
    <section id="sidebar">
        <div class="inner">
            <nav>
                <ul>
                    <li><a href="#">Kalkulator</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <div id="wrapper">
        <section id="intro" class="wrapper style1 fade-up">
            <div class="inner">
                <h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "nagłówek" ?? null : $tmp);?>
</h2>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26219818362407442c527a5_87163193', 'content');
?>

        </section>
    </div>
    <footer id="footer" class="wrapper style1-alt">
        <div class="inner">
            <ul class="menu">
                <li><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213331307162407442c53208_68726251', 'footer');
?>
</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </footer>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'content'} */
class Block_26219818362407442c527a5_87163193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_26219818362407442c527a5_87163193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_213331307162407442c53208_68726251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_213331307162407442c53208_68726251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
