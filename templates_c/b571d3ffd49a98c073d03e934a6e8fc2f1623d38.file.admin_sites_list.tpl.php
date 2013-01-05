<?php /* Smarty version Smarty-3.1.8, created on 2013-01-05 13:42:55
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_sites_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48494814450e82ddf839fe4-60742888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b571d3ffd49a98c073d03e934a6e8fc2f1623d38' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_sites_list.tpl',
      1 => 1357314406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48494814450e82ddf839fe4-60742888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sites' => 0,
    'site' => 0,
    'lastupdated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e82ddf8b7c47_99822580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e82ddf8b7c47_99822580')) {function content_50e82ddf8b7c47_99822580($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/homepages/3/d298570323/htdocs/_smarty_sites/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_relative_date')) include '/homepages/3/d298570323/htdocs/_smarty_sites/libs/plugins/modifier.relative_date.php';
?>
                                <div class="widget_contents noPadding content-box-content">
   
 						<table class="datatable tables">


                                                        <thead>
                                                                <tr>
                                                                 
                                                                 <th style="display:none;">Nicknames</th>
                                                                   <th>Celebrity</th>
                                                                   <th>Times Guessed</th>
                                                                   <th>Last Updated</th>
                                                                   <th>Edit</th>
                                                                </tr>

                                                        </thead>

                                                        <tfoot>
                                                                <tr>
                                                                        <td colspan="6">
                                                                        <!--    <div class="bulk-actions align-left">
                                                                                        <select name="dropdown">
                                                                                                <option value="option1">Choose an action...</option>
                                                                                                <option value="option2">Edit</option>
                                                                                                <option value="option3">Delete</option>
                                                                                        </select>
                                                                                        <a class="button" href="#">Apply to selected</a>
                                                                                </div> -->

                                                                               
                                                                        </td>
                                                                </tr>
                                                        </tfoot>
                                                        <tbody>
                                                <?php  $_smarty_tpl->tpl_vars['site'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['site']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['site']->key => $_smarty_tpl->tpl_vars['site']->value){
$_smarty_tpl->tpl_vars['site']->_loop = true;
?>
                                                                <tr>
                                                                       
                                                                       <td style="display:none;"><?php echo $_smarty_tpl->tpl_vars['site']->value['nicknames'];?>
</td>
                                                                        <td><a href="/admin/guesses/edit/<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['site']->value['firstname']);?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['site']->value['surname']);?>
</a></td>
                                                                        <td><?php echo $_smarty_tpl->tpl_vars['site']->value['timesguessed'];?>
</td>
									<?php ob_start();?><?php echo substr($_smarty_tpl->tpl_vars['site']->value['dateguessed'],-10);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["lastupdated"] = new Smarty_variable($_tmp1, null, 0);?>
                                                                        <td><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['lastupdated']->value);?>
</td>
                                                                        <td>
                                                                                <a href="/admin/guesses/edit/<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" title="Edit"><img src="/admin/resources/images/icons/pencil.png" alt="Edit" /></a>
                                                                                <a href="/admin/guesses/delete/<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" title="Delete"><img src="/admin/resources/images/icons/cross.png" alt="Delete" /></a>
                                                                        <!--    <a href="#" title="Edit Meta"><img src="/admin/resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                                                -->     </td>

                                                                </tr>
                                                <?php } ?>
                                                        </tbody>

                                                </table>

                                        </div> <!-- End Content Box Content -->
<?php }} ?>