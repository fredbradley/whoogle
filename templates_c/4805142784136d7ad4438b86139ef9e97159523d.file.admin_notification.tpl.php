<?php /* Smarty version Smarty-3.1.8, created on 2013-01-05 18:09:59
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45521559150e86c77db2147-05155966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4805142784136d7ad4438b86139ef9e97159523d' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_notification.tpl',
      1 => 1357401959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45521559150e86c77db2147-05155966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'dbresult' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e86c77dc5e50_19027624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e86c77dc5e50_19027624')) {function content_50e86c77dc5e50_19027624($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
	<div class="notification information png_bg">
  			<img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" />
		<div class="info iDialog"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
	</div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['dbresult']->value;?>

<?php }} ?>