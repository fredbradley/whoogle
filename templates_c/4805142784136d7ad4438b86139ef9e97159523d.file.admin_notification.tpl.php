<?php /* Smarty version Smarty-3.1.8, created on 2013-04-09 16:26:19
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11872425185164331b6b9364-06270827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '11872425185164331b6b9364-06270827',
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
  'unifunc' => 'content_5164331b6cbcc7_01912577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5164331b6cbcc7_01912577')) {function content_5164331b6cbcc7_01912577($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
	<div class="notification information png_bg">
  			<img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" />
		<div class="info iDialog"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
	</div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['dbresult']->value;?>

<?php }} ?>