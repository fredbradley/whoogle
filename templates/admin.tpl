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
						<h4 class="widget_header_title">Most Guessed Celebrity</h4>
					</div>
					<div class="widget_contents noPadding" style="background:url({$topceleb}) center center no-repeat;height:250px;">
					</div>
				</div>
			<!--	<div class="g_12 separator"><span></span></div> -->
			<!-- Quick Statistics -->
				<div class="g_3 quick_stats">
					<div class="big_stats visitor_stats">
						{$stats.numguesses}
					</div>
					<h5 class="stats_info">Celebrities</h5>
				</div>
				<div class="g_3 quick_stats">
					<div class="big_stats orders_stats">
						{$stats.numrounds}
					</div>
					<h5 class="stats_info">Rounds Played</h5>
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
	{if  $recentguesses|@count gt 0}
				{foreach $recentguesses as $recent}
					<tr>
						<td><a href="/admin/guesses/edit/{$recent.id}">{$recent.cname|ucwords}</a>, guessed {$recent.timesguessed} times in total!</td>
						{assign var="lastupdated" value="{$recent.dateguessed|substr:-10}"}
						<td>{$recent.lastguessed|date_format:'%A, %B %e, %I:%M %p'}</td>
					</tr>
				{/foreach}
	{else}<tr>
		<td class="alert">No Guesses made in the last 24 hours! (Is it Sunday or Monday?)</td></tr>
	{/if}
	</tbody>
</table>
<table class="tables" id="table_wTabs-1">
	<tbody>
		{foreach $mostguessed as $guess}
		<tr>
			<td><a href="/admin/guesses/edit/{$guess.id}">{$guess.cname|ucwords}</a></td>
			<td>{$guess.timesguessed}</td>
			<td>{$guess.lastguessed|date_format:'%A, %B %e, %I:%M %p'}</td>
		</tr>
		{/foreach}
	</tbody>
</table>
	
				</div>
				
			</div>
			<div class="g_12 separator"><span></span></div>
			
			{if $smarty.session.user.username == "toby" || $smarty.session.user.username == "toby.dolier" || $smarty.session.user.username == "fredbradley"}
			<div class="g_12">
					<div class="widget_header"><h4 class="wwIcon i_16_tables widget_header_title">All Guesses with Timestamps (That's {$fuckups|@count}) ({{$fuckups|@count} - {$stats.numguesses}} records were edited, but no guesses inputted)</h4></div>
					<div class="widget_contents">
 						<table class="datatable tables">

                                                        <thead>
                                                                <tr>
                                                                   <th>Celebrity</th>
                                                                   <th>Amount of Times Guessed (On record)</th>
                                                                   <th>Time of Last Edited</th>
                                                                </tr>

                                                        </thead>

                                                        <tfoot>
                                                                <tr>
                                                                        <td colspan="5">

                                                                                <div class="clear"></div>
                                                                        </td>
                                                                </tr>
                                                        </tfoot>
                                                        <tbody>
                                                {foreach $fuckups as $fuckup}
                                                                <tr>
                                                                        <td><a href="/admin/guesses/edit/{$fuckup.id}">{$fuckup.cname|ucwords}</a></td>
                                                                        <td>{$fuckup.timesguessed}</td>
                                                                        <td>{$fuckup.lastguessed} ({$fuckup.lastguessed|date_format:'%a, %b %e, %I%:%M %p'})</td>
                                                                </tr>
                                                {/foreach}
                                                        </tbody>

                                                </table>
</div>
                                        </div> <!-- End Content Box Content -->
                                        {/if}
			{*			<div class="g_12">
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
			</div> <!-- End .content-box --> *}
		</div>		
	</div>
</div>
	{*end copy *}
{include file="admin_bottom.tpl"}
