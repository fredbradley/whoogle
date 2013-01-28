<?php /* Smarty version Smarty-3.1.8, created on 2013-01-27 12:42:12
         compiled from "/Users/fredbradley/Sites/smarty_site/whoogle/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:872401650510520a471fd48-51845282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8cc3cdc6d84f47b4674f0a4903e1364be2e6924' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whoogle/templates/index.tpl',
      1 => 1358351926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '872401650510520a471fd48-51845282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TITLE' => 0,
    'SITE' => 0,
    'FACEPAGE' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_510520a478e2f1_13410909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510520a478e2f1_13410909')) {function content_510520a478e2f1_13410909($_smarty_tpl) {?><!DOCTYPE html>
<html id="home" lang="en">
<head prefix="og: http://ogp.me/ns#">
	<title> <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 </title>
	<meta http-equiv="Content-Type" 	content="text/html; charset=utf-8" />
	<meta name="keywords" 			content="<?php echo $_smarty_tpl->tpl_vars['SITE']->value['meta'];?>
"/>
	<meta name="description" 		content="<?php echo $_smarty_tpl->tpl_vars['FACEPAGE']->value['company_overview'];?>
<?php echo $_smarty_tpl->tpl_vars['SITE']->value['description'];?>
" />
	<meta property="fb:app_id" 		content="262274060507774" />
	<meta property="og:type"		content="website" />
	<meta property="og:url" 		content="http://<?php echo $_smarty_tpl->tpl_vars['SITE']->value['server_name'];?>
" />
	<meta property="og:title" 		content="<?php echo $_smarty_tpl->tpl_vars['SITE']->value['name'];?>
" />
	<meta property="og:image" 		content="http://<?php echo $_smarty_tpl->tpl_vars['SITE']->value['server_name'];?>
/assets/img/logo.png" />
	<meta property="og:image:type" 		content="image/png">
	<meta property="og:image:width" 	content="300">
	<meta property="og:image:height" 	content="300">
	<meta property="og:description" 	content="<?php echo $_smarty_tpl->tpl_vars['SITE']->value['description'];?>
" />
	<meta property="og:video" 		content="<?php echo $_smarty_tpl->tpl_vars['SITE']->value['video'];?>
" />
</head>
<body>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
	<table>
		<tr>
			<td>ID</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['id'];?>
</td>
		</tr>
		<tr>
			<td>Site Address</td>
			<td>http://<?php echo $_smarty_tpl->tpl_vars['SITE']->value['server_name'];?>
</td>
		</tr>
		<tr>
			<td>Site Skin</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['template'];?>
</td>
		</tr>
		<tr>
			<td>Site Name</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['name'];?>
</td>
		</tr>
		<tr>
			<td>Meta Keywords</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['meta'];?>
</td>
		</tr>
		<tr>
			<td>Meta Description</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['description'];?>
</td>
		</tr>
		<tr>
			<td>Site Title</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['title'];?>
</td>
		</tr>
		<tr>
			<td>Site Subheading</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['subhead'];?>
</td>
		</tr>
		<tr>
			<td>Video</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['video'];?>
</td>
		</tr>
		<tr>
			<td>Text</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['text'];?>
</td>
		</tr>
		<tr>
			<td>Analytics Code</td>
			<td><?php echo $_smarty_tpl->tpl_vars['SITE']->value['analytics'];?>
</td>
		</tr>
	</table>
<?php }else{ ?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }?>

</body>
</html>
<?php }} ?>