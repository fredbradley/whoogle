<?php /* Smarty version Smarty-3.1.8, created on 2013-04-07 20:51:25
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_users_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15994472265161ce3d369e31-74573011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e950b0c20950b171e6c7add180eb0afd1ac7f89b' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_users_list.tpl',
      1 => 1359408132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15994472265161ce3d369e31-74573011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5161ce3d43a176_07786794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5161ce3d43a176_07786794')) {function content_5161ce3d43a176_07786794($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_relative_date')) include '/homepages/3/d298570323/htdocs/_smarty_sites/libs/plugins/modifier.relative_date.php';
?>

                                <div class="widget_contents noPadding content-box-content">

 						<table class="datatable tables">

                                                        <thead>
                                                                <tr>
                                                                   <th>Name (Username)</th>
                                                                   <th>Email</th>
                                                                   <th>Access</th>
                                                                   <th>Last Active</th>
                                                                   <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['acl'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='9'){?><th>Delete</th><?php }?>
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
                                                <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                                                                <tr>
                                                                        <td><a href="edit/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
)</a></td>
                                                                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                                                                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['acl'];?>
</td>
                                                                        <td><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['user']->value['last_active']);?>
</td>
                                                                        <?php ob_start();?><?php echo $_SESSION['user']['acl'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='9'){?><td><a href="/admin/users/delete/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" title="Delete"><img src="/admin/resources/images/icons/cross.png" alt="Delete" /></a></td><?php }?>

                                                                </tr>
                                                <?php } ?>
                                                        </tbody>

                                                </table>

                                        </div> <!-- End Content Box Content -->
<?php }} ?>