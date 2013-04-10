<!DOCTYPE HTML>
<html lang="en-GB">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Title" content="{$title} | Whoogle Admin">
	<meta name="Keywords" content="Whoogle, Who's On Heart, Heart, Radio">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@fredbradley">
	<meta name="twitter:creator" content="@fredbradley">
	<meta name="description" content="Whoogle - an administration panel for the radio competition with the biggest cash prize in radio! Who's On Heart!">
	<meta name="author" content="Fred Bradley">
		<link rel="shortcut icon" href="/assets/images/heart_favicon.ico">

	<title>{$title} | Whoogle Admin</title>
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
{if $autocomplete=1}
<script type="text/javascript">
/* Script to use AutoComplete */
 $(function() {
    var availableTags = [
    {foreach $celebs as $celeb}
    	"{$celeb.cname|ucwords}",
    {/foreach}
      "Celeb Not Listed"
    ];
    $( ".celebslist" ).autocomplete({
      source: availableTags
    });
  });


</script>
{/if}
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
				<span class="label">{$greeting} {$user.first_name}! You have </span><span class="label" id="countdown">1800</span><span class="label"> seconds remaining!</span>
			</div>
			<div class="top_links">
				<ul>
{*					<li class="i_22_search search_icon">
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
				<img src="/assets/images/user_avatar.png" alt="user_avatar" class="user_avatar">
						</a>
					</li> *}
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
				{*	<li class="i_22_inbox top_inbox">
						<a href="#" title="Inbox">
							<span class="label lasCount">Inbox</span>
							<span class="small_count">3</span>
						</a>
					</li> *}
					<li class="">
						<a href="#" title="User Profile">
							<span class="label"><img src="/assets/images/user_avatar.png" alt="user_avatar" class="user_avatar">{$user.first_name} {$user.last_name} ({$user.email})</span>
						</a>
						<!-- Drop Menu -->
						<ul class="drop_menu menu_without_icons">
							<li>
								<a title="Change Password" href="/admin/users/changepassword/{$user.id}">
									<span class="label">Change Password</span>
								</a>									
							</li>
							<li>
								<a title="Change Details" href="/admin/users/edit/{$user.id}">
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
				{*<a href="#" Title="Kanrisha Home">
					<img src="/assets/images/TalentCow/daisy.png" alt="Talent Cow Logo">
				</a> *}				
			</div>
		</div>
	</header>
<div class="wrapper">{include file="admin_insert.tpl"}</div>
	<div class="wrapper small_menu">
		<ul class="menu_small_buttons">
			<li><a title="Home" class="i_22_dashboard {if {$smarty.get.page}==''}smActive{/if}" href="/admin/index.php"></a></li>
			<li><a title="Your Messages" class="i_22_search {if {$smarty.get.page}=='sites'}smActive{/if}" href="/admin/guesses/list"></a></li>
			<li><a title="Visual Data" class="i_22_ui {if {$smarty.get.page}=='users'}smActive{/if}" href="/admin/users/list"></a></li>
			<li><a title="Kit elements" class="i_22_forms {if {$smarty.get.page}=='answers'}smActive{/if}" href="/admin/answers/list"></a></li>
		{*	<li><a title="Some Rows" class="i_22_tables {if {$smarty.get.page}==''}smActive{/if}" href="tables.html"></a></li>
			<li><a title="Some Fields" class="i_22_forms {if {$smarty.get.page}==''}smActive{/if}" href="forms.html"></a></li> *}
		</ul>
	</div>

	<div class="wrapper contents_wrapper">
		
		<aside class="sidebar">
			<ul class="tab_nav">
				<li class="{if {$smarty.get.page}==''}active_tab {/if}i_32_dashboard">
					<a href="/admin/index.php" title="General Info">
						<span class="tab_label">Dashboard</span>
						<span class="tab_info">General Info</span>
					</a>
				</li>
				<li class="i_32_dollar cropped {if {$page}=="sites"}active_tab{/if}">
					<a href="/admin/guesses/list" title="Guesses Manager">
						<span class="tab_label">Celebs</span>
						<span class="tab_info">View Guesses</span>
					</a>
				</li>
				<li class="{if {$page}=="users"}active_tab {/if}i_32_ui">
					<a href="/admin/users/list" title="Users">
						<span class="tab_label">Users</span>
						<span class="tab_info">View Users</span>
					</a>
				</li>
				<li class="{if {$smarty.get.page}=='answers'}active_tab {/if}i_32_forms">
					<a href="/admin/answers/list" title="Answers">
						<span class="tab_label">Answers</span>
						<span class="tab_info">Hooray! At last!</span>
					</a>
				</li>
				<li class="{if {$smarty.get.page}=='logout'}active_tab {/if}i_32_tables">
					<a href="/admin/index.php?logout" title="Log Out">
						<span class="tab_label">Log Out</span>
						<span class="tab_info">Clock Off</span>
					</a>
				</li>
			</ul>
		</aside>
		
		{* // BELOW HERE ARE HIDDEN DIVS *}
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
				<input type="hidden" name="fromemail" value="{$user.email}" />
				<input type="hidden" name="fromname" value="{$user.first_name} {$user.last_name}" />
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
