<?php /* Smarty version Smarty-3.1.8, created on 2013-01-04 15:56:38
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98435719850e6fbb695bc69-11869081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e42781ce00915a3cc6dc755b843ba502131d3558' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_head.tpl',
      1 => 1357311708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98435719850e6fbb695bc69-11869081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'SESH' => 0,
    'user' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e6fbb69b4dd0_64833641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e6fbb69b4dd0_64833641')) {function content_50e6fbb69b4dd0_64833641($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | Whoogle Admin</title>
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="/assets/javascript/Flot/excanvas.js"></script>
	<![endif]-->
	<!-- The Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Oswald|Droid+Sans:400,700" rel="stylesheet">
	<!-- The Main CSS File -->
	<link rel="stylesheet" href="/assets/css/style.css">
	<!-- jQuery -->
	<script src="/assets/javascript/jQuery/jquery-1.7.2.min.js"></script>
	<!-- Flot -->
	<script src="/assets/javascript/Flot/jquery.flot.js"></script>
	<script src="/assets/javascript/Flot/jquery.flot.resize.js"></script>
	<script src="/assets/javascript/Flot/jquery.flot.pie.js"></script>
	<!-- DataTables -->
	<script src="/assets/javascript/DataTables/jquery.dataTables.min.js"></script>
	<!-- ColResizable -->
	<script src="/assets/javascript/ColResizable/colResizable-1.3.js"></script>
	<!-- jQuryUI -->
	<script src="/assets/javascript/jQueryUI/jquery-ui-1.8.21.min.js"></script>
	<!-- Uniform -->
	<script src="/assets/javascript/Uniform/jquery.uniform.js"></script>
	<!-- Tipsy -->
	<script src="/assets/javascript/Tipsy/jquery.tipsy.js"></script>
	<!-- Elastic -->
	<script src="/assets/javascript/Elastic/jquery.elastic.js"></script>
	<!-- ColorPicker -->
	<script src="/assets/javascript/ColorPicker/colorpicker.js"></script>
	<!-- SuperTextarea -->
	<script src="/assets/javascript/SuperTextarea/jquery.supertextarea.min.js"></script>
	<!-- UISpinner -->
	<script src="/assets/javascript/UISpinner/ui.spinner.js"></script>
	<!-- MaskedInput -->
	<script src="/assets/javascript/MaskedInput/jquery.maskedinput-1.3.js"></script>
	<!-- ClEditor -->
	<script src="/assets/javascript/ClEditor/jquery.cleditor.js"></script>
	<!-- Full Calendar -->
	<script src="/assets/javascript/FullCalendar/fullcalendar.js"></script>
	<!-- Color Box -->
	<script src="/assets/javascript/ColorBox/jquery.colorbox.js"></script>
	<!-- Kanrisha Script -->
	<script src="/assets/javascript/kanrisha.js"></script>
</head>

	<!-- Top Panel -->
	<div class="top_panel">
		<div class="wrapper">
			<div class="user">
				<img src="/assets/images/user_avatar.png" alt="user_avatar" class="user_avatar">
				<span class="label"><?php echo $_smarty_tpl->tpl_vars['SESH']->value['user']['info']['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['SESH']->value['user']['info']['last_name'];?>
</span>
				<!-- Top Tooltip -->
				<div class="top_tooltip">
					<div>
						<ul class="user_options">
							<li class="i_16_profile"><a href="#" title="Profile"></a></li>
							<li class="i_16_tasks"><a href="#" title="Tasks"></a></li>
							<li class="i_16_notes"><a href="#" title="Notes"></a></li>
							<li class="i_16_options"><a href="#" title="Options"></a></li>
							<li class="i_16_logout"><a href="/logout.php" title="Log-Out"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="top_links">
				<ul>
					<li class="i_22_search search_icon">
						<div class="top_tooltip right_direction">
							<div>
								<form class="top_search_form">
									<input type="text" class="top_search_input">
									<input type="submit" class="top_search_submit" value="">
								</form>
							</div>
						</div>
					</li>
					<li class="i_22_settings">
						<a href="#" title="Settings">
							<span class="label">Settings</span>
						</a>
					</li>
					<li class="i_22_upload">
						<a href="#" title="Upload">
							<span class="label">Upload</span>
						</a>
						<!-- Drop Menu -->
						<ul class="drop_menu menu_with_icons right_direction">
							<li>
								<a class="i_16_add" href="#" title="New Flie">
									<span class="label">New File</span>
								</a>									
							</li>
							<li>
								<a class="i_16_progress" href="#" title="2 Files Left">
									<span class="label">Files Left</span>
									<span class="small_count">2</span>
								</a>
							</li>
							<li>
								<a class="i_16_files" href="#" title="Browse Files">
									<span class="label">Browse Files</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="i_22_inbox top_inbox">
						<a href="#" title="Inbox">
							<span class="label lasCount">Inbox</span>
							<span class="small_count">3</span>
						</a>
					</li>
					<li class="i_22_pages">
						<a href="#" title="Pages">
							<span class="label">Pages</span>
						</a>
						<!-- Drop Menu -->
						<ul class="drop_menu menu_without_icons">
							<li>
								<a title="403 Page" href="403.html">
									<span class="label">403 Forbidden</span>
								</a>									
							</li>
							<li>
								<a href="404.html" title="404 Page">
									<span class="label">404 Not Found</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<header class="main_header">
		<div class="wrapper">
			<div class="logo">
				
					<h2>Welcome <?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
</h2>
			<p id="page-intro">Welcome to the updated 'Whoogle'!</p>
			</div>
		</div>
	</header>

	<div class="wrapper small_menu">
		<ul class="menu_small_buttons">
			<li><a title="General Info" class="i_22_dashboard smActive" href="index.html"></a></li>
			<li><a title="Your Messages" class="i_22_inbox" href="inbox.html"></a></li>
			<li><a title="Visual Data" class="i_22_charts" href="charts.html"></a></li>
			<li><a title="Kit elements" class="i_22_ui" href="ui.html"></a></li>
			<li><a title="Some Rows" class="i_22_tables" href="tables.html"></a></li>
			<li><a title="Some Fields" class="i_22_forms" href="forms.html"></a></li>
		</ul>
	</div>

	<div class="wrapper contents_wrapper">
		
		<aside class="sidebar">
			<ul class="tab_nav">
				<li class="<?php ob_start();?><?php echo $_GET['page'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==''){?>active_tab <?php }?>i_32_dashboard">
					<a href="/admin/index.php" title="General Info">
						<span class="tab_label">Dashboard</span>
						<span class="tab_info">General Info</span>
					</a>
				</li>
				<li class="i_32_inbox <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="sites"){?>active_tab<?php }?>">
					<a href="/admin/guesses/list" title="Guesses Manager">
						<span class="tab_label">Celebs</span>
						<span class="tab_info">View Guesses</span>
					</a>
				</li>
				<li class="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=="users"){?>active_tab <?php }?>i_32_ui">
					<a href="/admin/users/list" title="Users">
						<span class="tab_label">Users</span>
						<span class="tab_info">View Users</span>
					</a>
				</li>
				<li class="<?php ob_start();?><?php echo $_GET['page'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=='settings'){?>active_tab <?php }?>i_32_forms">
					<a href="index.php?page=settings" title="Settings">
						<span class="tab_label">Settings</span>
						<span class="tab_info">Configuration</span>
					</a>
				</li>
			</ul>
		</aside>
		
		
		<div id="info" style="display:none">
			<h3>Project Info</h3>
				<p><strong>Who's On Heart online searchable database</strong> by <a href="http://www.fredbradley.me">Fred Bradley</a></p>
				<p>This project is custom developed for Heart and Global Radio. Developed by Fred Bradley under the instructions of Toby D'Olier, Senior Producer of the Who's On Heart competition.</p><p>Admin template based upon Fred Bradley's 'Quonkay' SEO Solution</p>
			</div>
			<div id="databasebackup" style="display:none;">
				<h3>Make a Database Backup</h3>
				<p>It's suggested that you do this at the end of every day. </p><p>The database that the site uses will never swap over, without specific action from Fred, however at least you're making backups so we can revert to the most recent should things hit the fan!</p>
				<form action="/admin/index.php" method="post">
				<input type="hidden" name="dbaction" value="backup" />
				<input type="hidden" name="dobackup" value="1" />
				<input class="button" type="submit" name="submit" value="Do the Backup!" />
				</form>
			</div>
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->	
		<h3>Mail for Help!</h3>
			<form action="/inc/functions/mailer.php" method="post">
					
					<h4>Message</h4>
				<input type="hidden" name="subject" value="Mail For Help" />
				<input type="hidden" name="fromemail" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" />
				<input type="hidden" name="fromname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
" />
				<fieldset>
					<textarea class="textarea" name="email" cols="79" rows="5"></textarea>
				</fieldset>
				<fieldset>
					<input class="button" type="submit" value="Send" />
				</fieldset>
			</form>
				
			</div> <!-- End #messages -->
<div id="temp_container"><?php }} ?>