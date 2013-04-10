<?php /* Smarty version Smarty-3.1.8, created on 2013-04-10 09:51:30
         compiled from "/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1462082985516528122cd8e8-65860524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1462082985516528122cd8e8-65860524',
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
  'unifunc' => 'content_516528122d82e4_90328718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516528122d82e4_90328718')) {function content_516528122d82e4_90328718($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
	<div class="notification information png_bg">
  			<img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" />
		<div class="info iDialog"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
	</div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['dbresult']->value;?>

<?php }} ?>