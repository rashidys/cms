<?php /* Smarty version Smarty-3.1.6, created on 2021-12-13 17:04:10
         compiled from "../views/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37794575961b72bd0448d79-78518541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dbdba5b3e744fb99042215648705161ce6110d6' => 
    array (
      0 => '../views/default/header.tpl',
      1 => 1639397044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37794575961b72bd0448d79-78518541',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61b72bd052a82',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b72bd052a82')) {function content_61b72bd052a82($_smarty_tpl) {?><html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
	</head
<body>
	<div id="header">
		<h1>cms - интернет магазин</h1>
	</div>	
	
	<?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="centerColumn">
		centerColumn<?php }} ?>