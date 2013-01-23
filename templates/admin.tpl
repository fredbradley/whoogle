{include file="admin_head.tpl" title="Home"}  

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
					<input type="hidden" name="username" value="{$user.username}" />
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
				{include file="admin_notification.tpl"}
				<div class="g_6">
					<div class="widget_header">
						<h4 class="widget_header_title">Most Guessed Celeb</h4>
					</div>
					<div class="widget_contents noPadding">
						<center><img src="{$topceleb}" class="g_12" style="text-align:center;margin:auto;width:auto;max-height:200px;" /></center>
					</div>
				</div>
				<div class="g_6"></div>
				<div class="g_12 separator"><span></span></div>
			<!-- Quick Statistics -->
				<div class="g_3 quick_stats">
					<div class="big_stats visitor_stats">
						{$stats.numguesses}
					</div>
					<h5 class="stats_info">Celebrities</h5>
				</div>
				<div class="g_3 quick_stats">
					<div class="big_stats tickets_stats">
						{$stats.guessattempts}
					</div>
					<h5 class="stats_info">Guess Attempts</h5>
				</div>
				<div class="g_3 quick_stats">
					<div class="big_stats users_stats">
						{$stats.guessesinhour}
					</div>
					<h5 class="stats_info">Guesses In Last Hour</h5>
				</div>
				<div class="g_3 quick_stats">
					<div class="big_stats orders_stats">
						{$stats.numrounds}
					</div>
					<h5 class="stats_info">Rounds Played</h5>
				</div>
			</div>
			<div class="g_12 separator under_stat"><span></span></div>
			<div class="g_12">
				<div class="widget_header">
					<h4 class="widget_header_title wwIcon i_16_tables">Guesses in the last 24 hours *</h4>
				</div>
				<div class="widget_contents noPadding">
				<table class="tables">
	{*				<thead>
					<tr>
						<td>Celebrity</td>
						<th>Last Updated</th>
					</tr>
					</thead>
*}					<tbody>
				{foreach $recentguesses as $recent}
					<tr>
						<td><a href="/admin/guesses/edit/{$recent.id}">{$recent.cname|ucwords}</a>, guessed {$recent.timesguessed} times in total!</td>
						{assign var="lastupdated" value="{$recent.dateguessed|substr:-10}"}
						<td>{$recent.lastguessed|date_format:'%A, %B %e, %I:%M %p'}</td>
					</tr>
				{/foreach}
					</tbody>
				</table>
				</div>
				<span class="label">* If one celebrity has been guessed more than once in 24 hours it will only show in this list once!</span>
			</div>
			<div class="g_12">
				<div class="widget_header">
					<h4 class="widget_header_title wwIcon i_16_chats">Useful Stats</h4>
				</div>
				<div class="widget_contents">
					<div class="tab-content default-tab">
						<p><strong>Unique User Submits:</strong> {$stats.guesssubmits|default:"Database Currently Too Big To Compute"}</p>
						<p><strong>Most Guessed Name:</strong> {$stats.mostguessed}</p>
						<p><strong>Next Game play:</strong> {$stats.nextplay}</p>
						<p><a href="#databasebackup" rel="modal"><strong>Backup Database</strong></a></p>
					</div> <!-- End #tab3 -->        					
				</div> <!-- End .content-box-content -->
			</div> <!-- End .content-box -->
		</div>		
	</div>
</div>
	{*end copy *}
<img src="{$topceleb}" />		
{include file="admin_bottom.tpl"}
