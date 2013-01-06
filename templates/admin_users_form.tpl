
<div class="widget_header content-box-header">
  <h4 class="widget_header_title">{if {$action}=='edit'}Edit User{elseif {$action}=='delete'}Delete User &quot;{$edit.username}&quot;{else}Add User{/if}</h4>
</div>
<!-- End .content-box-header -->

<div class="widget_contents noPadding content-box-content"> {$dbresult|default: ''}
  {if {$action}=='delete'}
  <form action="/admin/index.php?{$smarty.server.QUERY_STRING}" method="post">
  <div class="g_12">
      <p class="lwParagraph label">Are you 100% sure you want to delete <span class="highlight">{$edit.first_name} {$edit.last_name}'s</span> access to this site?</p>
      <p class="lwParagraph label">If you do change your mind, later on, you can always add a user like normal!</p>
        <div class="g_6"><a href="/admin/index.php?message=Cancelled">
        <div class="button-cancel alert">Cancel</div>
        </a>
        </div>
        <div class="g_6">
        <input type="hidden" name="id" value="{$edit.id}" />
        <input type="submit" class="g_12 error simple_buttons button-confirm" name="confirm-delete" value="Confirm" />
        </div>
        </div>
    </div>
  </form>
  {else}
  <form action="/admin/index.php?{$smarty.server.QUERY_STRING}" method="post">
      
      <div class="line_grid">
      <div class="g_3">
        <label class="label">First Name</label>
       </div><div class="g_9">
        <input value="{$edit.first_name}" class="simple_field text-input small-input" type="text" id="first_name" name="first_name" />
		        <div class="field_notice">D'ya really need a description for this?</div>

        </div>
         </div>
      <div class="line_grid">
      <div class="g_3">
        <label class="label">Last Name</label>
       </div><div class="g_9"> <input value="{$edit.last_name}" class="simple_field text-input small-input" type="text" id="last_name" name="last_name" />
       </div></div>
      <div class="line_grid"><div class="g_3">
        <label class="label">Email Address</label></div>
        <div class="g_9">
        <input value="{$edit.email}" class="simple_field text-input medium-input" type="text" id="email" name="email" />
      </div></div>
      <div class="line_grid"><div class="g_3">
        <label class="label">Username</label></div><div class="g_9">
        <input value="{$edit.username}" class="simple_field text-input small-input" type="text" id="username" name="username" />
      </div></div>
      {if {$action}=='edit'}
      	<div class="line_grid">
      		<div class="g_3">
        		<label class="label">Change Password</label>
        	</div>
        	<div class="g_9">
				<div class="simple_buttons">
					<a href="/admin/users/changepassword/{$edit.id}"><div class="label">Change Password</div></a>
				</div>
				<div class="field_notice">Changes Page</div>
			</div>
		</div>
      {else}
      <div class="line_grid"><div class="g_3">
        <label class="label">Password</label></div><div class="g_9">
        <input class="simple_field text-input small-input" type="password" id="passwd" name="passwd" />
      </div></div>
      {/if}
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
      <div class="line_grid">
      <div class="g_3"></div>
      <div class="g_9 label">
        <input class="simple_buttons submitIt button" type="Submit" value="Save User" />
      </div></div>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
  {/if} </div>
<!-- End Content Box Content -->
<div id="changepassword" style="display:none;">
  <form name="changepassword">
    <input type="hidden" name="changepassword" />
    <input type="password" name="oldpasswd" class="text-input medium-input" />
    <input type="password" name="newpasswd" class="text-input medium-input" />
    <input type="submit" class="button" value="Change Password" />
  </form>
</div>
