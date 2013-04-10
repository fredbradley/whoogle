<?php /* Smarty version Smarty-3.1.8, created on 2013-04-10 17:13:17
         compiled from "/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_answers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29944417251658f9d163325-86361391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31ef1808b51cd5eae5edc3a40043d18dddb9a978' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_answers.tpl',
      1 => 1358351926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29944417251658f9d163325-86361391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'answers' => 0,
    'answer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51658f9d25ec62_58104078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51658f9d25ec62_58104078')) {function content_51658f9d25ec62_58104078($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_relative_date')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.relative_date.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Secret Answers"), 0);?>
  

	<body>
	
	
			<div class="contents">
			<div class="grid_wrapper">

				<div class="g_6 contents_header">
					<h3 class="i_16_dashboard tab_label">The Answers</h3>
					<div><span class="label">So, who is it saying "Who's On Heart"?</span></div>
				</div>
				<div class="g_6 contents_options">
					<div class="simple_buttons">
						<a href="/admin/answers/delete"><div class="bwIcon i_16_pacman label">Delete An Answer</div></a>
					</div>
					<div class="simple_buttons">
						<a href="/admin/answers/add"><div class="bwIcon i_16_add label">Add An Answer</div></a>
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
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp1==''||$_tmp2=='list'){?>	
				<div class="widget_contents noPadding content-box-content">
		
<table class="resizeable_tables tables">
	<thead>
		<tr>
			<th>Celebrity</th>
			<th>Listener</th>
			<th>Word</th>
			<th>When</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['answers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value){
$_smarty_tpl->tpl_vars['answer']->_loop = true;
?>
	<tr>
		<td><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['answer']->value['name']);?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['answer']->value['listener'];?>
</td>
		<td>"<?php echo $_smarty_tpl->tpl_vars['answer']->value['word'];?>
"</td>
		<td><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['answer']->value['time']);?>
</td>
	</tr>
<?php } ?>
</tbody>
</table>
<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value=='add';?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>
<div class="widget_header content-box-header">
  <h4 class="widget_header_title">Add an Answer</h4>
</div>
<div class="widget_contents noPadding content-box-content">

<div id="addanswer">
<form action="/admin/answers/list" method="post">
	<div class="line_grid">
		<div class="g_3">
			<label class="label" for="answer">Answer</label>
		</div>
		<div class="g_9">
			<input class="simple_field text-input medium-input" type="text" name="answer" /><div class="field_notice">"Tina Turner"</div>
		</div>
	</div>
	<div class="line_grid">
		<div class="g_3">
			<label class="label" for="listener">Listener's Name</label>
		</div>
		<div class="g_9">
			<input class="simple_field text-input medium-input" type="text" name="listener" />
			<div class="field_notice">"Katie O'Brien"</div>
		</div>
	</div>
	<div class="line_grid">
		<div class="g_3">
			<label class="label" for="word">Word</label>
		</div>
		<div class="g_9">
			<input type="text" name="word" class="simple_field text-input medium-input" />
			<div class="field_notice">"Who's"</div>
		</div>
	</div>
	<div class="line_grid">
		<div class="g_3">
			<label class="label" for="prize">Prize</label>
		</div>
		<div class="g_9">
			<input type="text" name="prize" class="simple_field text-input medium-input" />
			<div class="field_notice">The amount of money won. (No &quot;&pound;&quot; sign needed.)</div>
		</div>
	</div>
	<div class="line_grid">
		<div class="g_3">
			<label class="label" for="newslink">News Page URL</label>
		</div>
		<div class="g_9">
			<input type="text" name="newslink" class="simple_field text-input large-input" />
			<div class="field_notice">http://www.heart.co.uk/some/news/page/article</div>
		</div>
	</div>
	<div class="line_grid">
		<div class="g_3"></div>
		<div class="g_9">
			<input type="hidden" name="addanswer" value="1" />
			<input type="submit" value="Add Answer" class="submitIt simple_buttons button" />
		</div>
	</div>
</form></div>
<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=="delete"){?>
<div class="widget_header content-box-header">
  <h4 class="widget_header_title">Delete an Answer</h4>
</div>
<div class="widget_contents noPadding content-box-content">
<div id="deleteanswer">
<form action="/admin/answers/list" method="post">
<div class="g_3"></div>
<div class="g_9"><span class="label">Currently, the way to edit an entry, is to delete it and start again.</span></div>
<div class="line_grid">
	<div class="g_3">
		<label class="label" for="answer">Celebrity</label>
	</div>
	<div class="g_9">
		<select name="celebrity" class="simple_form">
			<option value="null">Select Your Celebrity</option>
			<?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['answers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value){
$_smarty_tpl->tpl_vars['answer']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['answer']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['answer']->value['name'];?>
</option>
			<?php } ?>
		</select>
	
	</div>
</div>
<div class="line_grid">
	<div class="g_3"></div>
	<div class="g_9">
		<input type="hidden" name="deleteanswer" value="1" />
		<input type="submit" value="Delete Answer" class="simple_buttons label submitIt button" />
		<div class="field_notice">There is no 'Confirm' stage, please ensure that you really want to do this!</div>
	</div>
</div>
</form>
</div>
<?php }}}?>
</div></div>
<?php echo $_smarty_tpl->getSubTemplate ("admin_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>