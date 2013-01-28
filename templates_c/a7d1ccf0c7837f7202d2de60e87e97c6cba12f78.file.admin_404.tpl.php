<?php /* Smarty version Smarty-3.1.8, created on 2013-01-27 12:41:36
         compiled from "/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:706330044510520802a7a11-23007471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7d1ccf0c7837f7202d2de60e87e97c6cba12f78' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_404.tpl',
      1 => 1358351926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '706330044510520802a7a11-23007471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_510520802da283_75754566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510520802da283_75754566')) {function content_510520802da283_75754566($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  

	<body>
	
	
			<div class="contents">
			<div class="grid_wrapper">



<div class="g_12 error"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
<div>		<img src="/assets/Images/Pages/404.png" alt="404" class="pages">
		<a href="/admin/index.php" class="goBack simple_buttons">Go Back To Home Page</a>
	</div>


</div></div>
<?php echo $_smarty_tpl->getSubTemplate ("admin_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>