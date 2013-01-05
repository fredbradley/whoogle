<?php /* Smarty version Smarty-3.1.8, created on 2013-01-05 13:53:08
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77111396750e83044c6bc90-27417111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df025e5a9eb372e593036ceedcf153be884450a5' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_users.tpl',
      1 => 1357312313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77111396750e83044c6bc90-27417111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e83044cedc68_50713136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e83044cedc68_50713136')) {function content_50e83044cedc68_50713136($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  

	<body>
	<div class="contents">
	
	<div class="grid_wrapper">
		<div class="g_6 contents_header">
					<h3 class="i_16_dashboard tab_label">Whoogle Users</h3>
					<div><span class="label">You know who you are!</span></div>
				</div>
				<div class="g_6 contents_options">
					<div class="simple_buttons">
						<a href="/admin/users/add"><div class="bwIcon i_16_add label">Add A New User</div></a>
					</div>
				</div>

				<div class="g_12 separator"><span></span></div>
				<div class="g_12">		
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
<?php echo $_smarty_tpl->getSubTemplate ("admin_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



			<div class="g_12 content-box"><!-- Start Content Box -->
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="add"){?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_users_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="edit"){?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_users_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=="delete"){?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_users_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_users_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }}}?>
				
			</div> <!-- End .content-box -->
			
			
<?php echo $_smarty_tpl->getSubTemplate ("admin_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>