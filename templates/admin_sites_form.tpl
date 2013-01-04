
<div class="widget_header content-box-header">
  <h4 class="widget_header_title">Add a Guess</h4>
</div>
<!-- End .content-box-header -->

<div class="widget_contents noPadding content-box-content"> {if {$action}=='delete'}
  <form action="/admin/index.php?{$smarty.server.QUERY_STRING}" method="post">
  <div class="g_12">
      <p class="lwParagraph label">Are you 100% sure you want to delete <span class="highlight">{$edit.cname|capitalize}</span> from the database?</p>
      <p class="label lwParagraph">There is no recovering this method, apart from adding the entire content again!</p>
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
    <div style="clear:both;"></div>
  </form>
  {else}
  <form action="/admin/index.php?{$smarty.server.QUERY_STRING}" method="post">
    {if {$action}=='edit'}
    <input type="hidden" name="returnmeto" value="{$smarty.server.HTTP_REFERER}" />
    {/if}
    <input type="hidden" name="id" id="id" value="{$edit.id}" />
    <div class="line_grid">
    	<div class="g_3">
			<label class="label">First Name</label>
		</div>
		<div class="g_9">
			<input class="text-input medium-input simple_field" type="text" id="firstname" value="{$edit.firstname}" name="firstname" />
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
										value="{$edit.surname}" 
									/>
    </div></div>
    <input type="hidden" name="cname" id="cname" value"{$edit.cname}" />
    <div class="line_grid">
    <div class="g_3">
      <label class="label">Nick Names</label>
     </div>
     <div class="g_9">
      <textarea class="text-input textarea simple_field" id="nicknames" name="nicknames" cols="30" rows="5">{$edit.nicknames}</textarea>
      <div class="field_notice">A comma separated list of all possible nicknames of mispellings</div> 
      </div>
      </div>
   
      <div class="line_grid">
      <div class="g_3">
        <label class="label">Number of times guessed</label>
        </div>
        <div class="g_3">
        <input class="text-input small-input simple_field spinner1" type="text" id="timesguessed" name="timesguessed" value="{$edit.timesguessed|default:1}" />
        </div></div>
      <!--<p><label>Time Stamp</label>-->
      <input type="hidden" id="dateguessed" name="dateguessed" value="{$smarty.now}" />
      <!--<br /><small>{$smarty.now|date_format}</small></p>-->
      
      <div class="line_grid">
      	<div class="g_3"></div>
      	<div class="g_9">
        <input class="button submitIt simple_buttons" type="submit" value="Submit" />
      </div>
      </div>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
  {/if} </div>
<!-- End Content Box Content --> 
