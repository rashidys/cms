<?php /* Smarty version Smarty-3.1.6, created on 2021-12-22 16:44:22
         compiled from "../views/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115220731161b33777c36f54-88928611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1febcd04b5db3f3dad3a541e467b066e67da6d4d' => 
    array (
      0 => '../views/default/index.tpl',
      1 => 1640173455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115220731161b33777c36f54-88928611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61b33777c4836',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b33777c4836')) {function content_61b33777c4836($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
	<div style="float:left; padding: 0px 30px 40px 0px;">
		<a href="/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
			<img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100"/> 
		</a><br />	
		<a href="/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
	</div>	
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%3==0){?>
	<div style="clear: both;"></div>			
<?php }?>
	
<?php } ?><?php }} ?>