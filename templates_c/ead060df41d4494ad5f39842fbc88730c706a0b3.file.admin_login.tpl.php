<?php /* Smarty version Smarty-3.1.8, created on 2013-04-10 10:38:18
         compiled from "/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2871640635165330a66ea22-75295019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ead060df41d4494ad5f39842fbc88730c706a0b3' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_login.tpl',
      1 => 1365582895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2871640635165330a66ea22-75295019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITE' => 0,
    'msg' => 0,
    'error' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5165330a6bf3d3_73479939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5165330a6bf3d3_73479939')) {function content_5165330a6bf3d3_73479939($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="en-US">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# profile: http://ogp.me/ns/profile#">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:type" content="website">
	<meta property="og:title" content="&quot;Whoogle&quot; for Who's On Heart" />
	<link rel="shortcut icon" href="/assets/images/heart_favicon.ico">
	<meta property="og:url" content="http://whoogle.fredb.me">
	<meta name="Title" content="Login | Whoogle Admin">
	<meta name="Keywords" content="Whoogle, Who's On Heart, Heart, Radio">
	<meta name="twitter:card" content="summary">
	<meta name="title" content="Whoogle | Admin Login">
	<meta name="twitter:site" content="@fredbradley">
	<meta name="twitter:creator" content="@fredbradley">
	<meta property="og:description" content="an administration panel for the radio competition with the biggest cash prize in radio! Who's On Heart!">
	<meta name="description" content="Whoogle - an administration panel for the radio competition with the biggest cash prize in radio! Who's On Heart!">
	<meta name="author" content="Fred Bradley">
	<meta property="og:image" content="http://whoogle.fredb.me/assets/images/woh_logo.png">
	<link rel="canonical" href="http://whoogle.fredb.me/admin/login"/>


	<title>Login | Whoogle Admin</title>
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
	<body id="login">
		<div id="wrapper contents_wrapper login-wrapper" class="png_bg">
<?php echo $_smarty_tpl->getSubTemplate ("admin_insert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="login" id="login-content">
			<div id="login-top">
				<h1><?php echo $_smarty_tpl->tpl_vars['SITE']->value['name'];?>
</h1>
				<!-- Logo (221px width) -->

				<img id="logo" src="/assets/images/woh_logo.png" style="width:100%" alt="<?php echo $_smarty_tpl->tpl_vars['SITE']->value['name'];?>
 logo" />

				
				
			</div> <!-- End #logn-top -->
			<div style="margin-top:10px;margin-bottom:10px;">
			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> 
						<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

					<?php }?>
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>
					<div style="margin-top:5px;margin-bottom:5px;" class="notification alert png_bg">
						<div>
							<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

						</div>
					</div>
					<?php }?>
										<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>
					<div style="margin-top:5px;margin-bottom:5px;" class="notification error png_bg">
						<div>
							<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

						</div>
					</div>
					<?php }?>
				</div>
				<div class="widget_header">
					<h4 class="widget_header_title wwIcon i_16_login">Login</h4>
				</div>
				<div class="widget_contents lgNoPadding">
					<form action="/admin/index.php" method="POST">					
						<div class="line_grid">
							<div class="g_2 g_2M">
								<label class="label">User</label>
							</div>
							<div class="g_10 g_10M">
								<input class="simple_field tooltip text-input" title="Your Username" placeholder="Username" name="username" type="text" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="line_grid">
							<div class="g_2 g_2M"><label class="label">Pass</label></div>
							<div class="g_10 g_10M">
								<input class="simple_field tooltip text-input" title="Your Secret" type="password" name="password" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="line_grid">
							<div class="g_6 g_6M">
								<input class="submitIt simple_buttons" value="Log In" type="submit">
							</div>
							<div class="g_6 g_6M">
								<div class="simple_buttons">
									<div class="bwIcon bdC i_16_help">Help</div>
									<div class="dialog bDialog" title="You need help!">
										<span class="label lwParagraph">Your username is the same as your work login username. </span>
										<br /><br />
										<span class="label lwParagraph">If you've forgotten your password, you're a muppet. For now, email <a href="http://www.fredbradley.me/contact">Fred</a> and he'll sort you out. (An automatic 'forgotten password' function will appear soon!)</span>
										<br /><br />
										<span class="label lwParagraph">If you're new to the game, and think you need to be added as a user for Whoogle, then you better check with Toby D first!</span>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="line_grid">
							<div class="g_12 g_12M">
								<span class="label">Are you a little lost? <a href="http://www.heart.co.uk/win/whos-heart/" target="_blank" class="label">Click here to find out more about Who's On Heart, and learn how you could be in with a chance to win £125,000.<a/></span>
							</div>
							<div class="clear"></div>
						</div>
					</form>
				</div>
				<div class="g_12" id="btTop" title="Visit Fred's Site">
					<a id="btLeft" href="http://www.fredbradley.me/portfolio/whos-on-heart?utm_source=hosting&utm_medium=sitebuilder&utm_term=whoogle&utm_content=whoogle&utm_campaign=sitebuilder" title="Visit Fred's Site">
						<img id="btRight" src="http://fredbradley.me/wp-content/uploads/2012/04/fredbradleylogo-415x110.png" alt="Fred Bradley Logo" title="Visit Fred's Site" style="width:100%;margin-bottom:10px;" />
					</a>
				</div>
			</div> <!-- End #login-content -->
			<div class="wrapper">
				<div class="g_12" style="text-align:center;">	
					<span class="label" style="text-align:center;">A product developed by <a href="http://www.fredbradley.me/portfolio/whos-on-heart?utm_source=hosting&utm_medium=sitebuilder&utm_term=whoogle&utm_content=whoogle&utm_campaign=sitebuilder">Fred Bradley</a><br /><br />&copy; <a href="http://www.fredbradley.me/portfolio/whos-on-heart?utm_source=hosting&utm_medium=sitebuilder&utm_term=whoogle&utm_content=whoogle&utm_campaign=sitebuilder">Fred Bradley</a> 2012-2013</span>
				</div>
			</div>
		</div> <!-- End #login-wrapper -->	
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
  </body>  
</html>

<?php }} ?>