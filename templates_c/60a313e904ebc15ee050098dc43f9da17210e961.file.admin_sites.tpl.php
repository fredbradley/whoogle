<?php /* Smarty version Smarty-3.1.8, created on 2013-01-05 18:09:49
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_sites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57859090650e86c6df18499-21685467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60a313e904ebc15ee050098dc43f9da17210e961' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_sites.tpl',
      1 => 1357403600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57859090650e86c6df18499-21685467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e86c6e072682_28993727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e86c6e072682_28993727')) {function content_50e86c6e072682_28993727($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Secret Celebs"), 0);?>
  

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
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="add"){?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_sites_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="edit"){?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_sites_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=="delete"){?>
                                        <?php echo $_smarty_tpl->getSubTemplate ("admin_sites_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->getSubTemplate ("admin_sites_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }}}?>
				
			</div> <!-- End .content-box -->	
			
			<!-- Quick Statistics -->
				

				

				
		
			
<?php echo $_smarty_tpl->getSubTemplate ("admin_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>





<?php }} ?>