<?php /* Smarty version Smarty-3.1.8, created on 2013-01-17 11:28:24
         compiled from "/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_sites_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120752139250f7e058dcfc36-37856523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5c29835fa5e5fb126f3963d1373e9502b452c89' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_sites_list.tpl',
      1 => 1358351926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120752139250f7e058dcfc36-37856523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'sites' => 0,
    'site' => 0,
    'lastupdated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50f7e058e7a713_90776858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f7e058e7a713_90776858')) {function content_50f7e058e7a713_90776858($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_relative_date')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.relative_date.php';
?>
                                <div class="widget_contents noPadding content-box-content">
   
 						<table class="datatable tables">


                                                        <thead>
                                                                <tr>
                                                                   <th>Celebrity</th>
                                                                   <th>Times Guessed</th>
                                                                   <th>Last Updated</th>
                                                                   <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['acl']=='9';?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?><th>Delete</th><?php }?>
																	<th style="display:none;">Nicknames</th>

                                                                </tr>

                                                        </thead>

                                                        <tfoot>
                                                                <tr>
                                                                        <td colspan="3">
                                                                 
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
                                                                        <td><a href="/admin/guesses/edit/<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['site']->value['firstname']);?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['site']->value['surname']);?>
</a></td>
                                                                        <td><?php echo $_smarty_tpl->tpl_vars['site']->value['timesguessed'];?>
</td>
									<?php ob_start();?><?php echo substr($_smarty_tpl->tpl_vars['site']->value['dateguessed'],-10);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["lastupdated"] = new Smarty_variable($_tmp2, null, 0);?>
                                                                        <td><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['lastupdated']->value);?>
</td>
                                                                      <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['acl']=='9';?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?> <td>
                                                                                                                                                                <a href="/admin/guesses/delete/<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" title="Delete"><img src="/admin/resources/images/icons/cross.png" alt="Delete" /></a>
                                                                        <!--    <a href="#" title="Edit Meta"><img src="/admin/resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                                                -->     </td> <?php }?>                                                                       <td style="display:none;"><?php echo $_smarty_tpl->tpl_vars['site']->value['nicknames'];?>
</td>


                                                                </tr>
                                                <?php } ?>
                                                        </tbody>

                                                </table>

                                        </div> <!-- End Content Box Content -->
<?php }} ?>