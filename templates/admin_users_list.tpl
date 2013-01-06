

                                <div class="widget_contents noPadding content-box-content">

 						<table class="datatable tables">

                                                        <thead>
                                                                <tr>
                                                                   <th>Name (Username)</th>
                                                                   <th>Email</th>
                                                                   <th>Access</th>
                                                                   <th>Last Login</th>
                                                                   {if {$user.acl}=='9'}<th>Delete</th>{/if}
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
                                                {foreach $users as $user}
                                                                <tr>
                                                                        <td><a href="edit/{$user.id}">{$user.first_name} {$user.last_name} ({$user.username})</a></td>
                                                                        <td>{$user.email}</td>
                                                                        <td>{$user.acl}</td>
                                                                        <td>{$user.last_login|relative_date}</td>
                                                                        {if {$smarty.session.user.acl}=='9'}<td><a href="/admin/users/delete/{$user.id}" title="Delete"><img src="/admin/resources/images/icons/cross.png" alt="Delete" /></a></td>{/if}

                                                                </tr>
                                                {/foreach}
                                                        </tbody>

                                                </table>

                                        </div> <!-- End Content Box Content -->
