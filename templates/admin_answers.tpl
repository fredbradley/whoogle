{include file="admin_head.tpl" title="Secret Answers"}  

	<body>
	
	{* test *}
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
{include file="admin_notification.tpl"}
			
			{* COPY OLD CODE HERE *}
			
			<div class="g_12 content-box"><!-- Start Content Box -->

			{*END COPY*}
{if {$action}=='' OR {$action}=='list'}	
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
{foreach $answers as $answer}
	<tr>
		<td>{$answer.name|capitalize}</td>
		<td>{$answer.listener}</td>
		<td>"{$answer.word}"</td>
		<td>{$answer.time|relative_date}</td>
	</tr>
{/foreach}
</tbody>
</table>
{elseif {$action=='add'}}
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
{elseif {$action}=="delete"}
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
			{foreach $answers as $answer}
				<option value="{$answer.name}">{$answer.name}</option>
			{/foreach}
		</select>
	{*	<input class="simple_field text-input medium-input" type="Text" name="celebrity" />
		<div class="field_notice">Tina Turner</div> *}
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
{/if}
</div></div>
{include file="admin_bottom.tpl"}

