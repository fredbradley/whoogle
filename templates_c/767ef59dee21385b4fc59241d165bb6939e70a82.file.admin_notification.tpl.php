<?php /* Smarty version Smarty-3.1.8, created on 2013-01-23 17:53:45
         compiled from "/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1230646887510023a97d5173-74078574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '767ef59dee21385b4fc59241d165bb6939e70a82' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_notification.tpl',
      1 => 1358351926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1230646887510023a97d5173-74078574',
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
  'unifunc' => 'content_510023a97df753_67354095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510023a97df753_67354095')) {function content_510023a97df753_67354095($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
	<div class="notification information png_bg">
  			<img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" />
		<div class="info iDialog"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
	</div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['dbresult']->value;?>

<?php }} ?>