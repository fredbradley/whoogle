<?php /* Smarty version Smarty-3.1.8, created on 2013-01-23 17:53:41
         compiled from "/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_sites_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1421284282510023a5ea22c6-90665270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd523ec4d74534718ed1974aca253dc37504f11b1' => 
    array (
      0 => '/Users/fredbradley/Sites/smarty_site/whoogle/templates/admin_sites_form.tpl',
      1 => 1358961595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1421284282510023a5ea22c6-90665270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_510023a5ee4102_72673930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510023a5ee4102_72673930')) {function content_510023a5ee4102_72673930($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_relative_date')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.relative_date.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/fredbradley/Sites/smarty_site/libs/plugins/modifier.date_format.php';
?>
<div class="widget_header content-box-header">
  <h4 class="widget_header_title">Add a Guess</h4>
</div>
<!-- End .content-box-header -->

<div class="widget_contents noPadding content-box-content"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='delete'){?>
  <form action="/admin/index.php?<?php echo $_SERVER['QUERY_STRING'];?>
" method="post">
  <div class="g_12">
      <p class="lwParagraph label">Are you 100% sure you want to delete <span class="highlight"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['edit']->value['cname']);?>
</span> from the database?</p>
      <p class="label lwParagraph">There is no recovering this method, apart from adding the entire content again!</p>
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
    <div style="clear:both;"></div>
  </form>
  <?php }else{ ?>
  <form action="/admin/index.php?<?php echo $_SERVER['QUERY_STRING'];?>
" method="post">
    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='edit'){?>
	<div class="line_grid">
	<span class="label">This record was last edited on <?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['edit']->value['lastguessed']);?>
</span>
	</div>
    <?php }?>
    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['id'];?>
" />
    <div class="line_grid">
    	<div class="g_3">
			<label class="label">First Name</label>
		</div>
		<div class="g_9">
			<input class="text-input medium-input simple_field" type="text" id="firstname" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['firstname'];?>
" name="firstname" />
		</div>
	</div>
    <div class="line_grid">
    	<div class="g_3">
	      <label class="label">Surname</label>
	    </div>
	    <div class="g_9">
      <input
										class="simple_field text-input medium-input" 
										type="text" 
										id="surname" 
										name="surname" 
										value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['surname'];?>
" 
									/>
    </div></div>
    <input type="hidden" name="cname" id="cname" value"<?php echo $_smarty_tpl->tpl_vars['edit']->value['cname'];?>
" />
    <div class="line_grid">
    <div class="g_3">
      <label class="label">Nick Names</label>
     </div>
     <div class="g_9">
      <textarea class="text-input textarea simple_field" id="nicknames" name="nicknames" cols="30" rows="5"><?php echo $_smarty_tpl->tpl_vars['edit']->value['nicknames'];?>
</textarea>
      <div class="field_notice">A comma separated list of all possible nicknames of mispellings</div> 
      </div>
      </div>
   
      <div class="line_grid">
      <div class="g_3">
        <label class="label">Number of times guessed</label>
        </div>
        <div class="g_3">
        <input class="text-input small-input simple_field spinner1" type="text" id="timesguessed" name="timesguessed" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['edit']->value['timesguessed'])===null||$tmp==='' ? 1 : $tmp);?>
" />
        </div></div>
      <!--<p><label>Time Stamp</label>-->
      <input type="hidden" id="dateguessed" name="dateguessed" value="<?php echo time();?>
" />
      <!--<br /><small><?php echo smarty_modifier_date_format(time());?>
</small></p>-->
<div class="line_grid">
	<div class="g_3">
		<label class="label">Is this edit a result of a <b>real guess</b> from a listener?</label>
	</div>
	<div class="g_9">
		<input type="checkbox" class="simple_form" name="recordguess" checked="checked">
		<div class="field_notice">(If you're just making an amendment - like adding or removing nickanmes) then you can uncheck this, and your edit won't count as a 'guess')</div>
	</div>
</div>      
      <div class="line_grid">
      	<div class="g_3"></div>
      	<div class="g_9">
        <input class="button submitIt simple_buttons" type="submit" value="Submit" />
      </div>
      </div>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
  <?php }?> </div>
<!-- End Content Box Content --> 
<?php }} ?>