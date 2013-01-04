<?php /* Smarty version Smarty-3.1.8, created on 2013-01-04 15:37:29
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_users_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66665717350e6f7398ca8f8-41422658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7740e399e33787998bb872d59c3056a9ea00ef41' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_users_form.tpl',
      1 => 1357313846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66665717350e6f7398ca8f8-41422658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'edit' => 0,
    'dbresult' => 0,
    'user' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e6f73998d931_07830888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e6f73998d931_07830888')) {function content_50e6f73998d931_07830888($_smarty_tpl) {?>
<div class="widget_header content-box-header">
  <h4 class="widget_header_title"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='edit'){?>Edit User<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='delete'){?>Delete User &quot;<?php echo $_smarty_tpl->tpl_vars['edit']->value['username'];?>
&quot;<?php }else{ ?>Add User<?php }}?></h4>
</div>
<!-- End .content-box-header -->

<div class="widget_contents noPadding content-box-content"> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['dbresult']->value)===null||$tmp==='' ? '' : $tmp);?>

  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=='delete'){?>
  <form action="/admin/index.php?<?php echo $_SERVER['QUERY_STRING'];?>
" method="post">
  <div class="g_12">
      <p class="lwParagraph label">Are you 100% sure you want to delete <span class="highlight"><?php echo $_smarty_tpl->tpl_vars['edit']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['edit']->value['last_name'];?>
's</span> access to this site?</p>
      <p class="lwParagraph label">If you do change your mind, later on, you can always add a user like normal!</p>
        <div class="g_6"><a href="/admin/index.php?message=Cancelled">
        <div class="button-cancel alert">Cancel</div>
        </a>
        </div>
        <div class="g_6">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['id'];?>
" />
        <input type="submit" class="g_12 error simple_buttons button-confirm" name="confirm-delete" value="Confirm" />
        </div>
        </div>
    </div>
  </form>
  <?php }else{ ?>
  <form action="/admin/index.php?<?php echo $_SERVER['QUERY_STRING'];?>
" method="post">
      
      <div class="line_grid">
      <div class="g_3">
        <label class="label">First Name</label>
       </div><div class="g_9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['first_name'];?>
" class="simple_field text-input small-input" type="text" id="first_name" name="first_name" />
		        <div class="field_notice">D'ya really need a description for this?</div>

        </div>
         </div>
      <div class="line_grid">
      <div class="g_3">
        <label class="label">Last Name</label>
       </div><div class="g_9"> <input value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['last_name'];?>
" class="simple_field text-input small-input" type="text" id="last_name" name="last_name" />
       </div></div>
      <div class="line_grid"><div class="g_3">
        <label class="label">Email Address</label></div>
        <div class="g_9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['email'];?>
" class="simple_field text-input medium-input" type="text" id="email" name="email" />
      </div></div>
      <div class="line_grid"><div class="g_3">
        <label class="label">Username</label></div><div class="g_9">
        <input value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['username'];?>
" class="simple_field text-input small-input" type="text" id="username" name="username" />
      </div></div>
      <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=='edit'){?>
      <div class="line_grid"><div class="g_3">
        <label class="label">Change Password</label>
        </div><div class="g_9">
        <input style="background:#ff0000;color:#ffffff;" class="simple_field text-input small-input" type="text" readonly id="nonedit" name="nonedit" value="Sorry, you can't change your password" />
        <?php ob_start();?><?php echo $_GET['id'];?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp5==$_tmp6){?> 
        <div class="field_notice">Feature coming soon</div><?php }?>
         </div></div>
      <?php }else{ ?>
      <div class="line_grid"><div class="g_3">
        <label class="label">Password</label></div><div class="g_9">
        <input class="simple_field text-input small-input" type="password" id="passwd" name="passwd" />
      </div></div>
      <?php }?>
      <div class="line_grid"><div class="g_3">
        <label class="label">Access Control</label>
        </div><div class="g_9">
        <select name="acl" class="simple_form small-input" id="acl">
          <option value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['acl'];?>
">--- SELECT ---</option>
          <option <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['edit']->value['acl'];?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7=='0'){?>selected <?php }?>value="0">Locked Out</option>
          <option <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['edit']->value['acl'];?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8=='1'){?>selected <?php }?>value="1">Edit & Delete Sites Only</option>
          <option <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['edit']->value['acl'];?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9=='2'){?>selected <?php }?>value="2">Full Guesses Management</option>
          <option <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['edit']->value['acl'];?>
<?php $_tmp10=ob_get_clean();?><?php if ($_tmp10=='3'){?>selected <?php }?>value="3">Full Admin (Users & Site)</option>
          <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['edit']->value['acl'];?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['acl'];?>
<?php $_tmp12=ob_get_clean();?><?php if ($_tmp11=='9'||$_tmp12=='9'){?> 
          <option <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['edit']->value['acl'];?>
<?php $_tmp13=ob_get_clean();?><?php if ($_tmp13=='9'){?>selected <?php }?>value="9">God</option>
          <?php }?>
        </select></div>
      </div>
      <input type="hidden" name="submittype" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? 'error' : $tmp);?>
" />
      <div class="line_grid">
      <div class="g_3"></div>
      <div class="g_9">
        <input class="simple_buttons submitItbutton" type="Submit" value="Submit" />
      </div></div>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
  <?php }?> </div>
<!-- End Content Box Content -->
<div id="changepassword" style="display:none;">
  <form name="changepassword">
    <input type="hidden" name="changepassword" />
    <input type="password" name="oldpasswd" class="text-input medium-input" />
    <input type="password" name="newpasswd" class="text-input medium-input" />
    <input type="submit" class="button" value="Change Password" />
  </form>
</div>
<?php }} ?>