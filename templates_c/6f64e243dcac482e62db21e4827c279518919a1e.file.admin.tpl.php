<?php /* Smarty version Smarty-3.1.8, created on 2013-01-17 11:27:51
         compiled from "/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39738723950f7e0379ab406-91179223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f64e243dcac482e62db21e4827c279518919a1e' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin.tpl',
      1 => 1358351926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39738723950f7e0379ab406-91179223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50f7e037a10189_18626279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f7e037a10189_18626279')) {function content_50f7e037a10189_18626279($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Home"), 0);?>
  

<body>	
	<div class="contents">
		<div class="grid_wrapper">
			<div class="g_6 contents_header">
				<h3 class="i_16_dashboard tab_label">Dashboard</h3>
				<div><span class="label">General Informations and Resume</span></div>
			</div>
			<div class="g_6 contents_options">
				<div class="simple_buttons">
					<div class="bwIcon i_16_help bdC">Bug Report</div>
				</div>
				<div class="dialog bDialog" title="Report a bug, or request a feature…">
					<form method="post">
					<input type="hidden" name="bugreport" value="1" />
					<input type="hidden" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" />
					<div class="line_grid">
						<div class="g_12">
							<textarea name="bug" class="simple_field"></textarea>
						</div>
					</div>
					<div class="line_grid">
						<div class="g_3"></div>
						<div class="g_9">
							<input type="submit" class="simple_buttons submitIt label" />
						</div>
					</div>
					</form>
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
		
		</div>		
	</div>
</div>
	
		
			
<?php echo $_smarty_tpl->getSubTemplate ("admin_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>