{include file="admin_head.tpl" title="{$edit.cname|capitalize|default:'Secret Celebs'}"}  

	<body>
	
	{* test *}
			<div class="contents">
			<div class="grid_wrapper">

				<div class="g_6 contents_header">
					<h3 class="i_16_dashboard tab_label">Secret Celebrities</h3>
					<div><span class="label">A list of all the secret celebrities in the database</span></div>
				</div>
				<div class="g_6 contents_options">
					<div class="simple_buttons">
						<a href="/admin/guesses/add"><div class="bwIcon i_16_add label">Add A New Celebrity</div></a>
					</div>
				</div>

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
				{if {$action}=="add"}
					{include file="admin_sites_form.tpl"}
				{elseif {$action}=="edit"}
					{include file="admin_sites_form.tpl"}
				{elseif {$action}=="delete"}
                                        {include file="admin_sites_form.tpl"}
				{else}
					{include file="admin_sites_list.tpl"}
				{/if}
				
			</div> <!-- End .content-box -->	
			
			<!-- Quick Statistics -->
				

				

				
		
			
{include file="admin_bottom.tpl"}




