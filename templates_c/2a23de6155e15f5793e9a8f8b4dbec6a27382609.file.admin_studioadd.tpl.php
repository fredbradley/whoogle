<?php /* Smarty version Smarty-3.1.8, created on 2013-01-27 13:08:04
         compiled from "/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_studioadd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1716201379510526b4ae2f99-13513060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a23de6155e15f5793e9a8f8b4dbec6a27382609' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_studioadd.tpl',
      1 => 1359292080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1716201379510526b4ae2f99-13513060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'celebs' => 0,
    'celeb' => 0,
    'recentguesses' => 0,
    'recent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_510526b4b53e60_37478750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510526b4b53e60_37478750')) {function content_510526b4b53e60_37478750($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Studio Add",'autocomplete'=>1), 0);?>
  

<body>	
	<div class="contents">
		<div class="grid_wrapper">
			<div class="g_6 contents_header">
				<h3 class="i_16_dashboard tab_label">Studio Add</h3>
				<div><span class="label">Add a listener's Guess</span></div>
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
				<div class="widget_header">
					<h4 class="widget_header_title wwIcon i_16_tables">Guesses in the last 24 hours *</h4>
				</div>
				<div class="widget_contents noPadding">
				<div class="line_grid">
					<div class="g_3"><label class="label">Celebrity</label></div>
					<div class="g_9"><input type="text" id="celebs" class="simple_forms celebslist" /></div>
				</div>
				<div class="line_grid">
					<div class="g_3"><label class="label">Celebrity</label></div>
					<div class="g_9"><input type="text" id="celebs" class="simple_forms celebslist" /></div>
				</div>
				<div class="line_grid">
					<div class="g_3"><label class="label">Celebrity</label></div>
					<div class="g_9">
						<select size="3" name="decision2">
							<?php  $_smarty_tpl->tpl_vars['celeb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['celeb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['celebs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['celeb']->key => $_smarty_tpl->tpl_vars['celeb']->value){
$_smarty_tpl->tpl_vars['celeb']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['celeb']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['celeb']->value['cname'];?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
					<?php if (count($_smarty_tpl->tpl_vars['recentguesses']->value)>0){?>
				<table class="tables">
					<tbody>
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
					</tbody>
				</table>
<?php }else{ ?>
<p class="alert">No Guessed made in the last 24 hours! (Is it Sunday or Monday?)</p>
				</div>
				<span class="label">* If one celebrity has been guessed more than once in 24 hours it will only show in this list once!</span>
			</div>
<?php }?>

		</div>		
	</div>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("admin_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>