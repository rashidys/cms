<?php /* Smarty version Smarty-3.1.6, created on 2021-12-16 15:50:40
         compiled from "../views/default/leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192761872061b72bd054b632-70719617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a4906898c9ccedff76f3f82fc475b9a1c851a9e' => 
    array (
      0 => '../views/default/leftcolumn.tpl',
      1 => 1639651835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192761872061b72bd054b632-70719617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61b72bd054c31',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b72bd054c31')) {function content_61b72bd054c31($_smarty_tpl) {?><div id="leftColumn">

<div id="leftMenu">
	<div class="menuCaption">Меню</div>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
			<?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?>
			<?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
			--<a href="#"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br />
			<?php } ?>
			<?php }?>
		<?php } ?>
	</div>
		
</div>	<?php }} ?>