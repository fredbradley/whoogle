
<div class="widget_header content-box-header">
  <h4 class="widget_header_title">{if {$action}=='edit'}Edit User{elseif {$action}=='delete'}Delete User &quot;{$edit.username}&quot;{elseif {$action}=="changepassword"}Change Password for &quot;{$edit.username}&quot;{else}Add User{/if}</h4>
</div>
<!-- End .content-box-header -->

<div class="widget_contents noPadding content-box-content"> 
  <form action="/admin/index.php?{$smarty.server.QUERY_STRING}" method="post">
      
{if {{$user.id}=={$edit.id}} OR {{$user.acl}=='9'}}
	{if {$user.id}!={$edit.id}}
		<div class="line_grid">
			<div class="g_3"></div>
			<div class="g_9">
				<span class="label">You are editing this users password as 'God'. Be careful!</span>
			</div>
		</div>
	{/if}
		<div class="line_grid">
			<div class="g_3">
				<label class="label">Username</label>
			</div>
			<div class="g_9">
				<input type="text" class="simple_field" name="username" value="{$edit.username}" readonly="readonly" />
			</div>
		</div>
      <div class="line_grid"><div class="g_3">
        <label class="label">Current Password</label></div>
        <div class="g_9">
        <input value="" class="simple_field text-input medium-input" type="password" id="currentpassword" name="currentpassword" />
      </div></div>
      <div class="line_grid"><div class="g_3">
        <label class="label">New Password</label></div><div class="g_9">
        <input value="" class="simple_field text-input small-input" type="password" id="newpassword" name="newpassword" />
      </div></div>
      <div class="line_grid"><div class="g_3">
        <label class="label">Confirm New Password</label></div><div class="g_9">
        <input value="" class="simple_field text-input small-input" type="password" id="confirmnewpassword" name="confirmnewpassword" />
      </div></div>
{*
      <div class="line_grid"><div class="g_3">
        <label class="label">Access Control</label>
        </div><div class="g_9">
        <select name="acl" class="simple_form small-input" id="acl">
          <option value="{$edit.acl}">--- SELECT ---</option>
          <option {if {$edit.acl}=='0'}selected {/if}value="0">Locked Out</option>
          <option {if {$edit.acl}=='1'}selected {/if}value="1">Edit & Delete Sites Only</option>
          <option {if {$edit.acl}=='2'}selected {/if}value="2">Full Guesses Management</option>
          <option {if {$edit.acl}=='3'}selected {/if}value="3">Full Admin (Users & Site)</option>
          {if {$edit.acl}=='9' OR {$user.acl}=='9'} 
          <option {if {$edit.acl}=='9'}selected {/if}value="9">God</option>
          {/if}
        </select></div>
      </div> 
      <input type="hidden" name="submittype" value="{$type|default: 'error'}" /> 
*}      <div class="line_grid">
      <div class="g_3"></div>
      <div class="g_9">
        <input class="simple_buttons submitItbutton" type="Submit" value="Change Password" />
      </div></div>
    <div class="clear"></div>
    <!-- End .clear -->
{else}
<div class="line_grid">
	<div class="g_3"></div>
	<div class="g_9">
		<span class="label">Your username is not "{$edit.username}", therefore you can't change their password!</span>
	</div>
</div>
{/if}
  </form>
 </div>
<!-- End Content Box Content -->
