<?php /* Smarty version Smarty-3.1.8, created on 2013-01-05 17:47:01
         compiled from "/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_sites_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27232565650e867156573a1-13004638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfbc324dde756d0d8e00dad76d68c996ccef4137' => 
    array (
      0 => '/kunden/homepages/3/d298570323/htdocs/_smarty_sites/whoogle/templates/admin_sites_form.tpl',
      1 => 1357311137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27232565650e867156573a1-13004638',
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
  'unifunc' => 'content_50e867156cd687_26205873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e867156cd687_26205873')) {function content_50e867156cd687_26205873($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/homepages/3/d298570323/htdocs/_smarty_sites/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include '/homepages/3/d298570323/htdocs/_smarty_sites/libs/plugins/modifier.date_format.php';
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
    <input type="hidden" name="returnmeto" value="<?php echo $_SERVER['HTTP_REFERER'];?>
" />
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