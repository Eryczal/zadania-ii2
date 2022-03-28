<?php
/* Smarty version 4.1.0, created on 2022-03-27 16:28:31
  from 'C:\xampp\htdocs\zadania_php\05\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6240748f690b38_25518201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72b111104dd13e9077be5422e031cd6898b8d0a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadania_php\\05\\app\\CalcView.html',
      1 => 1648391304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6240748f690b38_25518201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6259550666240748f681190_08544215', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1982106246240748f681cc2_49013268', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'footer'} */
class Block_6259550666240748f681190_08544215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6259550666240748f681190_08544215',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1982106246240748f681cc2_49013268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1982106246240748f681cc2_49013268',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="">
	<section>
		<form action="" method="post" id="kalkulator">
			<div class="fields">
				<div class="field half">
					<label for="kwota">Kwota</label>
					<input type="number" name="kwota" id="kwota" placeholder="20000zł" min="1" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->k;?>
" />
				</div>
				<div class="field half">
					<label for="oprocentowanie">Oprocentowanie</label>
					<input type="number" name="oprocentowanie" id="oprocentowanie" placeholder="7,5%" min="0" step="0.01" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->o;?>
" />
				</div>
				<div class="field half">
					<label for="raty">Liczba rat</label>
					<input type="number" name="raty" id="raty" placeholder="24" min="1" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->r;?>
" />
				</div>
				<div class="field half">
					<div id="wynik"></div>
				</div>
			</div>
			<ul class="actions">
				<li><input type="submit" value="Oblicz" class="button submit" /></li>
			</ul>
		</form>
	</section>
</div>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
