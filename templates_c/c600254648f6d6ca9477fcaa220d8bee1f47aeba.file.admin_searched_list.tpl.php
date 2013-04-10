<?php /* Smarty version Smarty-3.1.8, created on 2013-04-10 17:31:37
         compiled from "/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_searched_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:535094878516593e95a4e32-48182507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c600254648f6d6ca9477fcaa220d8bee1f47aeba' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_searched_list.tpl',
      1 => 1365611471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '535094878516593e95a4e32-48182507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'atts' => 0,
    'guess' => 0,
    'lastupdated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_516593e95cbe30_44617753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516593e95cbe30_44617753')) {function content_516593e95cbe30_44617753($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_relative_date')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.relative_date.php';
?><div class="widget_header">
						<h4 class="widget_header_title wwIcon i_16_data">What the Punters Have Guessed...</h4>
</div>
                                <div class="widget_contents noPadding content-box-content">
   
 						<table class="datatable tables">

                                                        <thead>
                                                                <tr>
                                                                	<th>ID</th>
                                                                 	<th>Hash</th>
                                                                   <th>Guess</th>
                                                                   <th>Return</th>
                                                                   <th>When</th>
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

                                                                              
                                                                                <div class="clear"></div>
                                                                        </td>
                                                                </tr>
                                                        </tfoot>
                                                        <tbody>
                                                <?php  $_smarty_tpl->tpl_vars['guess'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['guess']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['atts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['guess']->key => $_smarty_tpl->tpl_vars['guess']->value){
$_smarty_tpl->tpl_vars['guess']->_loop = true;
?>
                                                                <tr>
                                                                		<td><?php echo $_smarty_tpl->tpl_vars['guess']->value['id'];?>
</td>
                                                                        <td><?php echo $_smarty_tpl->tpl_vars['guess']->value['hash'];?>
</td>
                                                                        <td><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['guess']->value['guess']);?>
</td>
                                                                        <td><?php echo $_smarty_tpl->tpl_vars['guess']->value['return'];?>
</td>
									<?php ob_start();?><?php echo substr($_smarty_tpl->tpl_vars['guess']->value['time'],-10);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["lastupdated"] = new Smarty_variable($_tmp1, null, 0);?>
                                                                        <td><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['lastupdated']->value);?>
</td>
                                                                </tr>
                                                <?php } ?>
                                                        </tbody>

                                                </table>

                                        </div> <!-- End Content Box Content -->
<div class="g_12"><div class="field_notice">NB: This page displays the list of searched guesses for the current table. Each night at Midnight the table is dumped and started again. Hence the reason why this may look empty at the moment!</div></div><?php }} ?>