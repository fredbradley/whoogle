<?php /* Smarty version Smarty-3.1.8, created on 2013-04-10 17:55:16
         compiled from "/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2083527432516599744ec906-05818591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6fbba607d4738efe9611f79d3fef62a62aacc64' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_head.tpl',
      1 => 1365612909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2083527432516599744ec906-05818591',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'celebs' => 0,
    'celeb' => 0,
    'greeting' => 0,
    'user' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5165997472d316_03767448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5165997472d316_03767448')) {function content_5165997472d316_03767448($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="en-GB">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Title" content="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | Whoogle Admin">
	<meta name="Keywords" content="Whoogle, Who's On Heart, Heart, Radio">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@fredbradley">
	<meta name="twitter:creator" content="@fredbradley">
	<meta name="description" content="Whoogle - an administration panel for the radio competition with the biggest cash prize in radio! Who's On Heart!">
	<meta name="author" content="Fred Bradley">
		<link rel="shortcut icon" href="/assets/images/heart_favicon.ico">

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
<script type="text/javascript">
//
 // This jQuery Plugin is from: http://davidwalsh.name/demo/jquery-countdown.php
 // ***********************************/
	$(document).ready(function() {
			
			/* delay function */
			jQuery.fn.delay = function(time,func){
				return this.each(function(){
					setTimeout(func,time);
				});
			};
			
			
			jQuery.fn.countDown = function(settings,to) {
				settings = jQuery.extend({
					startFontSize: '12px',
					endFontSize: '12px',
					duration: 1000,
					startNumber: 10,
					endNumber: 0,
					callBack: function() { }
				}, settings);
				return this.each(function() {
					
					if(!to && to != settings.endNumber) { to = settings.startNumber; }
					
					//set the countdown to the starting number
					$(this).text(to).css('fontSize',settings.startFontSize);
					
					//loopage
					$(this).animate({
						'fontSize': settings.endFontSize
					},settings.duration,'',function() {
						if(to > settings.endNumber + 1) {
							$(this).css('fontSize',settings.startFontSize).text(to - 1).countDown(settings,to - 1);
						}
						else
						{
							settings.callBack(this);
						}
					});
							
				});
			};
			
			$('#countdown').countDown({
				startNumber: 900, 
				callBack: function(me) {
					$('#countdownresult').html('<div class=\'error g_12\' style=\'padding-right:20px;padding-left:20px;\'>You have timed out!</div>').css('class','label');
					$('#countdown').hide().delay(3);
					alert('Oops! I\'m afraid you have spent too long doing nothing, and for security the system has logged you out! \r\n\nIf you are in the middle of adding or editing an entry, I suggest you copy the details down then you have them when you log back in again. \r\n\n(You will not be able to save any changes!)');
				}
			});
			
		});
	</script>
<?php if (!isset($_smarty_tpl->tpl_vars['autocomplete'])) $_smarty_tpl->tpl_vars['autocomplete'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['autocomplete']->value = 1){?>
<script type="text/javascript">
/* Script to use AutoComplete */
 $(function() {
    var availableTags = [
    <?php  $_smarty_tpl->tpl_vars['celeb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['celeb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['celebs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['celeb']->key => $_smarty_tpl->tpl_vars['celeb']->value){
$_smarty_tpl->tpl_vars['celeb']->_loop = true;
?>
    	"<?php echo ucwords($_smarty_tpl->tpl_vars['celeb']->value['cname']);?>
",
    <?php } ?>
      "Celeb Not Listed"
    ];
    $( ".celebslist" ).autocomplete({
      source: availableTags
    });
  });


</script>
<?php }?>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24018806-11']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

	<!-- Top Panel -->
	<div class="top_panel">
		<div class="wrapper">
			<div class="user" id="countdownresult">
				<span class="label"><?php echo $_smarty_tpl->tpl_vars['greeting']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
! You have </span><span class="label" id="countdown">1800</span><span class="label"> seconds remaining!</span>
			</div>
			<div class="top_links">
				<ul>

					<li class="i_22_upload">
						<a href="#" title="Upload">
							<span class="label">Backup Database</span>
						</a>
						<!-- Drop Menu -->
					
						<ul class="drop_menu menu_with_icons right_direction">
							<li>
								<a class="i_16_files" href="" title="Browse Files">
									<form method="post">
										<input type="hidden" name="dbaction" value="backup" />
										<span class="label">
											<input type="submit" class="i_16_progres disguised" value="Backup" />
										</span>
									</form>
								</a>							
							</li>
						</ul>
					</li>
				
					<li class="">
						<a href="#" title="User Profile">
							<span class="label"><img src="/assets/images/user_avatar.png" alt="user_avatar" class="user_avatar"><?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
)</span>
						</a>
						<!-- Drop Menu -->
						<ul class="drop_menu menu_without_icons">
							<li>
								<a title="Change Password" href="/admin/users/changepassword/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
									<span class="label">Change Password</span>
								</a>									
							</li>
							<li>
								<a title="Change Details" href="/admin/users/edit/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
									<span class="label">Change Details</span>
								</a>
							</li>
							<li>
								<a title="Log Out" href="/admin/index.php?logout">
									<span class="label">Logout</span>
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
								
			</div>
		</div>
	</header>
<div class="wrapper"><?php echo $_smarty_tpl->getSubTemplate ("admin_insert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
	<div class="wrapper small_menu">
		<ul class="menu_small_buttons">
			<li><a title="Home" class="i_22_dashboard <?php ob_start();?><?php echo $_GET['page'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==''){?>smActive<?php }?>" href="/admin/index.php"></a></li>
			<li><a title="Your Messages" class="i_22_search <?php ob_start();?><?php echo $_GET['page'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='sites'){?>smActive<?php }?>" href="/admin/guesses/list"></a></li>
			<li><a title="Visual Data" class="i_22_ui <?php ob_start();?><?php echo $_GET['page'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=='users'){?>smActive<?php }?>" href="/admin/users/list"></a></li>
			<li><a title="Kit elements" class="i_22_forms <?php ob_start();?><?php echo $_GET['page'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=='answers'){?>smActive<?php }?>" href="/admin/answers/list"></a></li>
		
		</ul>
	</div>

	<div class="wrapper contents_wrapper">
		
		<aside class="sidebar">
			<ul class="tab_nav">
				<li class="<?php ob_start();?><?php echo $_GET['page'];?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5==''){?>active_tab <?php }?>i_32_dashboard">
					<a href="/admin/index.php" title="General Info">
						<span class="tab_label">Dashboard</span>
						<span class="tab_info">General Info</span>
					</a>
				</li>
				<li class="i_32_dollar cropped <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6=="sites"){?>active_tab<?php }?>">
					<a href="/admin/guesses/list" title="Guesses Manager">
						<span class="tab_label">Celebs</span>
						<span class="tab_info">View Guesses</span>
					</a>
				</li>
				<li class="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7=="users"){?>active_tab <?php }?>i_32_ui">
					<a href="/admin/users/list" title="Users">
						<span class="tab_label">Users</span>
						<span class="tab_info">View Users</span>
					</a>
				</li>
				<li class="<?php ob_start();?><?php echo $_GET['page'];?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8=='answers'){?>active_tab <?php }?>i_32_forms">
					<a href="/admin/answers/list" title="Answers">
						<span class="tab_label">Answers</span>
						<span class="tab_info">Hooray! At last!</span>
					</a>
				</li>
				<li class="<?php ob_start();?><?php echo $_GET['page'];?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9=='guessattempts'){?>active_tab <?php }?>i_32_forms">
					<a href="/admin/searched/list" title="Guess Attempts">
						<span class="tab_label">Searches</span>
						<span class="tab_info">By the punters!</span>
					</a>
				</li>
				
				<li class="<?php ob_start();?><?php echo $_GET['page'];?>
<?php $_tmp10=ob_get_clean();?><?php if ($_tmp10=='logout'){?>active_tab <?php }?>i_32_tables">
					<a href="/admin/index.php?logout" title="Log Out">
						<span class="tab_label">Log Out</span>
						<span class="tab_info">Clock Off</span>
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
<div id="temp_container">
<div class="wrapper">
<div id='countdownresult'></div>		</div>
<?php }} ?>