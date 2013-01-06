<?php /* Smarty version Smarty-3.1.8, created on 2013-01-06 13:10:01
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190827320850e86c77c74955-37321090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa1c9e78ee379293b9a22a44f2793874b84a4c89' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin.tpl',
      1 => 1357477796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190827320850e86c77c74955-37321090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e86c77cfe535_72208774',
  'variables' => 
  array (
    'stats' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e86c77cfe535_72208774')) {function content_50e86c77cfe535_72208774($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Home"), 0);?>
  

<body>	
	<div class="contents">
		<div class="grid_wrapper">
			<div class="g_6 contents_header">
				<h3 class="i_16_dashboard tab_label">Dashboard</h3>
				<div><span class="label">General Informations and Resume</span></div>
			</div>
			<div class="g_6 contents_options">
				<div class="simple_buttons">
					<div class="bwIcon i_16_help">Help</div>
				</div>
			</div>
			<div class="g_12 separator"><span></span></div>
			<div class="g_12">
				<noscript> <!-- Show a notification if the user has disabled javascript -->
					<div class="notification error png_bg">
						<div>Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.</div>
					</div>
				</noscript>
				<?php echo $_smarty_tpl->getSubTemplate ("admin_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
				<div class="g_12">
					<span class="label">"Whoogle" - a term coined by <a target="_blank" href="http://www.twitter.com/tobydolier" id="btBottom" title="Tweet Tobes">Toby D'Olier</a> - is a search engine and administration panel for the "Who's On Heart" competition on the Heart Network. <br /><br />This product is developed <a id="btRight" href="http://www.fredbradley.me/portfolio/whos-on-heart?utm_source=hosting&utm_medium=sitebuilder&utm_term=whoogle&utm_content=whoogle&utm_campaign=sitebuilder" title="Visit Fred's Site">Fred Bradley</a>.</span>
				</div>
			<!-- Quick Statistics -->
				<div class="g_4 quick_stats">
					<div class="big_stats visitor_stats">
						<?php echo $_smarty_tpl->tpl_vars['stats']->value['numguesses'];?>

					</div>
					<h5 class="stats_info">Celebrities</h5>
				</div>
				<div class="g_4 quick_stats">
					<div class="big_stats tickets_stats">
						<?php echo $_smarty_tpl->tpl_vars['stats']->value['guessattempts'];?>

					</div>
					<h5 class="stats_info">Guess Attempts</h5>
				</div>
				<div class="g_4 quick_stats">
					<div class="big_stats users_stats">
						<?php echo $_smarty_tpl->tpl_vars['stats']->value['guessesinhour'];?>

					</div>
					<h5 class="stats_info">Guesses In Last Hour</h5>
				</div>
			</div>
			<div class="g_12 separator under_stat"><span></span></div>
			<div class="g_12">
				<div class="widget_header">
					<h4 class="widget_header_title wwIcon i_16_chats">Useful Stats</h4>
				</div>
				<div class="widget_contents">
					<div class="tab-content default-tab">
						<p><strong>Unique User Submits:</strong> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['stats']->value['guesssubmits'])===null||$tmp==='' ? "Database Currently Too Big To Compute" : $tmp);?>
</p>
						<p><strong>Most Guessed Name:</strong> <?php echo $_smarty_tpl->tpl_vars['stats']->value['mostguessed'];?>
</p>
						<p><strong>Next Game play:</strong> <?php echo $_smarty_tpl->tpl_vars['stats']->value['nextplay'];?>
</p>
						<p><a href="#databasebackup" rel="modal"><strong>Backup Database</strong></a></p>
					</div> <!-- End #tab3 -->        					
				</div> <!-- End .content-box-content -->
			</div> <!-- End .content-box -->
		</div>		
	</div>
</div>
	
		
			
<?php echo $_smarty_tpl->getSubTemplate ("admin_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>