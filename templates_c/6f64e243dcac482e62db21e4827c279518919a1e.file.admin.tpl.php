<?php /* Smarty version Smarty-3.1.8, created on 2013-04-25 13:45:39
         compiled from "/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159748125751792573a397a7-97222357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f64e243dcac482e62db21e4827c279518919a1e' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin.tpl',
      1 => 1365595125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159748125751792573a397a7-97222357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'topceleb' => 0,
    'stats' => 0,
    'recentguesses' => 0,
    'recent' => 0,
    'mostguessed' => 0,
    'guess' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51792573c85e14_11550570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51792573c85e14_11550570')) {function content_51792573c85e14_11550570($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Home"), 0);?>
  

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

<!--				<div class="g_4">
					<div class="widget_header">
						<h4 class="widget_header_title">Most Guessed Celebrity</h4>
					</div>
					<div class="widget_contents noPadding" style="margin:0px;text-align:center;">
					<center><img src="<?php echo $_smarty_tpl->tpl_vars['topceleb']->value;?>
" style="padding:0px;margin:0px;width:100%;" /></center>
					</div>
				</div> -->
			<!--	<div class="g_12 separator"><span></span></div> -->
			<!-- Quick Statistics -->
				<div class="g_4 quick_stats">
					<div class="big_stats visitor_stats">
						<?php echo $_smarty_tpl->tpl_vars['stats']->value['numguesses'];?>

					</div>
					<h5 class="stats_info">Guessed Celebrities</h5>
				</div>
				<div class="g_4 quick_stats">
					<div class="big_stats orders_stats">
						<?php echo $_smarty_tpl->tpl_vars['stats']->value['numrounds'];?>

					</div>
					<h5 class="stats_info">Rounds Played</h5>
				</div>
				<div class="g_4 quick_stats">
					<div class="big_stats orders_stats">
						<?php echo $_smarty_tpl->tpl_vars['stats']->value['mostguessed'];?>

					</div>
					<h5 class="stats_info">Most Guessed</h5>
				</div>
                                <div class="g_4 quick_stats">
                                        <div class="big_stats users_stats">
                                                <?php echo $_smarty_tpl->tpl_vars['stats']->value['yesterdaysSearches'];?>

                                        </div>
                                        <h5 class="stats_info">Searches Yesterday</h5>
                                </div>
				<div class="g_4 quick_stats">
					<div class="big_stats tickets_stats">
						<?php echo $_smarty_tpl->tpl_vars['stats']->value['guessattempts'];?>

					</div>
					<h5 class="stats_info">Searches Today</h5>
				</div>
				<div class="g_4 quick_stats">
					<div class="big_stats users_stats">
						<?php echo $_smarty_tpl->tpl_vars['stats']->value['guessesinhour'];?>

					</div>
					<h5 class="stats_info">Searches In Last Hour</h5>
				</div>
			</div>
			<div class="g_12 separator under_stat"><span></span></div>
			<div class="g_12" id="table_wTabs">
				<div class="widget_header wwOptions">
					<h4 class="widget_header_title wwIcon i_16_tables">Recent and Most Guessed</h4>
					<ul class="w_Tabs">
						<li><a href="#table_wTabs-2" title="Recently Guessed">Recent Guesses</a></li>
						<li><a href="#table_wTabs-1" title="Most Guessed">Most Guessed</a></li>
					</ul>
				</div>
				<div class="widget_contents noPadding">
				<table class="tables" id="table_wTabs-2">
					<tbody>
	<?php if (count($_smarty_tpl->tpl_vars['recentguesses']->value)>0){?>
				<?php  $_smarty_tpl->tpl_vars['recent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recentguesses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recent']->key => $_smarty_tpl->tpl_vars['recent']->value){
$_smarty_tpl->tpl_vars['recent']->_loop = true;
?>
					<tr>
						<td><a href="/admin/guesses/edit/<?php echo $_smarty_tpl->tpl_vars['recent']->value['id'];?>
"><?php echo ucwords($_smarty_tpl->tpl_vars['recent']->value['cname']);?>
</a>, guessed <?php echo $_smarty_tpl->tpl_vars['recent']->value['timesguessed'];?>
 times in total!</td>
						<?php ob_start();?><?php echo substr($_smarty_tpl->tpl_vars['recent']->value['dateguessed'],-10);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["lastupdated"] = new Smarty_variable($_tmp1, null, 0);?>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['recent']->value['lastguessed'],'%A, %B %e, %I:%M %p');?>
</td>
					</tr>
				<?php } ?>
	<?php }else{ ?><tr>
		<td class="alert">No Guesses made in the last 24 hours! (Is it Sunday or Monday?)</td></tr>
	<?php }?>
	</tbody>
</table>
<table class="tables" id="table_wTabs-1">
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['guess'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['guess']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mostguessed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['guess']->key => $_smarty_tpl->tpl_vars['guess']->value){
$_smarty_tpl->tpl_vars['guess']->_loop = true;
?>
		<tr>
			<td><a href="/admin/guesses/edit/<?php echo $_smarty_tpl->tpl_vars['guess']->value['id'];?>
"><?php echo ucwords($_smarty_tpl->tpl_vars['guess']->value['cname']);?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['guess']->value['timesguessed'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['guess']->value['lastguessed'],'%A, %B %e, %I:%M %p');?>
</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
	
				</div>
				
			</div>


			
		</div>		
	</div>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("admin_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>