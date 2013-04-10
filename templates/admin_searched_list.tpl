<div class="widget_header">
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

                                                                              {*  <div class="pagination">
	{if {$smarty.get.listpage > 1}}
                                                                                        <a href="/admin/searched/list/{$smarty.get.listpage - 1}" title="Previous Page">&laquo; Previous</a>{/if}

         {if $smarty.get.listpage < {$stats.guessattempts/10}}                                                                               <a href="/admin/searched/list/{$smarty.get.listpage + 1}" title="Next Page">Next &raquo;</a>
                                                              {/if}                  </div> <!-- End .pagination --> *}
                                                                                <div class="clear"></div>
                                                                        </td>
                                                                </tr>
                                                        </tfoot>
                                                        <tbody>
                                                {foreach $atts as $guess}
                                                                <tr>
                                                                		<td>{$guess.id}</td>
                                                                        <td>{$guess.hash}</td>
                                                                        <td>{$guess.guess|capitalize}</td>
                                                                        <td>{$guess.return}</td>
									{assign var="lastupdated" value="{$guess.time|substr:-10}"}
                                                                        <td>{$lastupdated|relative_date}</td>
                                                                </tr>
                                                {/foreach}
                                                        </tbody>

                                                </table>

                                        </div> <!-- End Content Box Content -->
<div class="g_12"><div class="field_notice">NB: This page displays the list of searched guesses for the current table. Each night at Midnight the table is dumped and started again. Hence the reason why this may look empty at the moment!</div></div>