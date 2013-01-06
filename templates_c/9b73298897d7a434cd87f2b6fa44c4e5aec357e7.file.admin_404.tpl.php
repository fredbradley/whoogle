<?php /* Smarty version Smarty-3.1.8, created on 2013-01-05 17:44:19
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83485475050e86673597558-38188505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b73298897d7a434cd87f2b6fa44c4e5aec357e7' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_404.tpl',
      1 => 1357402884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83485475050e86673597558-38188505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e866735f2136_99550123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e866735f2136_99550123')) {function content_50e866735f2136_99550123($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  

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