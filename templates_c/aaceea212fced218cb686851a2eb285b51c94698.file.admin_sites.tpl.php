<?php /* Smarty version Smarty-3.1.8, created on 2013-01-17 11:28:24
         compiled from "/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_sites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207210170650f7e058c95b47-51629897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaceea212fced218cb686851a2eb285b51c94698' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_sites.tpl',
      1 => 1358351926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207210170650f7e058c95b47-51629897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50f7e058dc85e2_55678060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f7e058dc85e2_55678060')) {function content_50f7e058dc85e2_55678060($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.capitalize.php';
?><?php ob_start();?><?php echo (($tmp = @smarty_modifier_capitalize($_smarty_tpl->tpl_vars['edit']->value['cname']))===null||$tmp==='' ? 'Secret Celebs' : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>$_tmp1), 0);?>
  

	<body>
	
	
			<div class="contents">
			<div class="grid_wrapper">

				<div class="g_6 contents_header">
					<h3 class="i_16_dashboard tab_label">Secret Celebrities</h3>
					<div><span class="label">A list of all the secret celebrities in the database</span></div>
				</div>
				<div class="g_6 contents_options">
					<div class="simple_buttons">
						<a href="/admin/guesses/add"><div class="bwIcon i_16_add label">Add A New Celebrity</div></a>
					</div>
				</div>

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
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="add"){?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_sites_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=="edit"){?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_sites_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=="delete"){?>
                                        <?php echo $_smarty_tpl->getSubTemplate ("admin_sites_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_sites_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }}}?>
				
			</div> <!-- End .content-box -->	
			
			<!-- Quick Statistics -->
				

				

				
		
			
<?php echo $_smarty_tpl->getSubTemplate ("admin_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>





<?php }} ?>