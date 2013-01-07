<?php /* Smarty version Smarty-3.1.8, created on 2013-01-06 17:47:09
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_users_form_changepassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167868990750e97bf62d7a09-82656908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e300d4c531a0ab158d41d86d64f34d55ec4b2abe' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_users_form_changepassword.tpl',
      1 => 1357487787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167868990750e97bf62d7a09-82656908',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e97bf63d7640_43283353',
  'variables' => 
  array (
    'action' => 0,
    'edit' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e97bf63d7640_43283353')) {function content_50e97bf63d7640_43283353($_smarty_tpl) {?>
<div class="widget_header content-box-header">
  <h4 class="widget_header_title"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='edit'){?>Edit User<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='delete'){?>Delete User &quot;<?php echo $_smarty_tpl->tpl_vars['edit']->value['username'];?>
&quot;<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=="changepassword"){?>Change Password for &quot;<?php echo $_smarty_tpl->tpl_vars['edit']->value['username'];?>
&quot;<?php }else{ ?>Add User<?php }}}?></h4>
</div>
<!-- End .content-box-header -->

<div class="widget_contents noPadding content-box-content"> 
  <form action="/admin/index.php?<?php echo $_SERVER['QUERY_STRING'];?>
" method="post">
      
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['edit']->value['id'];?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_tmp4==$_tmp5;?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['acl'];?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_tmp7=='9';?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp6||$_tmp8){?>
	<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['edit']->value['id'];?>
<?php $_tmp10=ob_get_clean();?><?php if ($_tmp9!=$_tmp10){?>
		<div class="line_grid">
			<div class="g_3"></div>
			<div class="g_9">
				<span class="label">You are editing this users password as 'God'. Be careful!</span>
			</div>
		</div>
	<?php }?>
		<div class="line_grid">
			<div class="g_3">
				<label class="label">Username</label>
			</div>
			<div class="g_9">
				<input type="text" class="simple_field" name="username" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['username'];?>
" readonly="readonly" />
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
      <div class="line_grid">
      <div class="g_3"></div>
      <div class="g_9">
        <input class="simple_buttons submitItbutton" type="Submit" value="Change Password" />
      </div></div>
    <div class="clear"></div>
    <!-- End .clear -->
<?php }else{ ?>
<div class="line_grid">
	<div class="g_3"></div>
	<div class="g_9">
		<span class="label">Your username is not "<?php echo $_smarty_tpl->tpl_vars['edit']->value['username'];?>
", therefore you can't change their password!</span>
	</div>
</div>
<?php }?>
  </form>
 </div>
<!-- End Content Box Content -->
<?php }} ?>