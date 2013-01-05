

                                <div class="widget_contents noPadding content-box-content">

 						<table class="datatable tables">

                                                        <thead>
                                                                <tr>
                                                                   <th>Name (Username)</th>
                                                                   <th>Email</th>
                                                                   <th>Access</th>
                                                                   <th>Last Login</th>
                                                                   <th>Delete</th>
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
                                                                        <td><a href="delete/{$user.id}" title="Delete"><img src="/admin/resources/images/icons/cross.png" alt="Delete" /></a></td>

                                                                </tr>
                                                {/foreach}
                                                        </tbody>

                                                </table>

                                        </div> <!-- End Content Box Content -->
