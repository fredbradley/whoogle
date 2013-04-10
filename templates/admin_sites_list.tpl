
                                <div class="widget_contents noPadding content-box-content">
   
 						<table class="datatable tables">


                                                        <thead>
								<tr>
									<th>Celebrity</th>
									<th>Times Guessed</th>
									<th>Last Updated</th>
									{if {$user.acl=='9'}}<th>Delete</th>{/if}
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
                                                {foreach $sites as $site}
                                                                <tr>
                                                                        <td><a href="/admin/guesses/edit/{$site.id}">{$site.firstname|capitalize} {$site.surname|capitalize}</a></td>
                                                                        <td>{$site.timesguessed}</td>
									{assign var="lastupdated" value="{$site.dateguessed|substr:-10}"}
                                                                        <td>{$lastupdated|relative_date}</td>
                                                                      {if {$user.acl=='9'}} <td>
                                                                                                                                                                <a href="/admin/guesses/delete/{$site.id}" title="Delete"><img src="/admin/resources/images/icons/cross.png" alt="Delete" /></a>
                                                                        <!--    <a href="#" title="Edit Meta"><img src="/admin/resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                                                -->     </td> {/if}                                                                       <td style="display:none;">{$site.nicknames}</td>


                                                                </tr>
                                                {/foreach}
                                                        </tbody>

                                                </table>

                                        </div> <!-- End Content Box Content -->
