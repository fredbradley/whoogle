

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
                                                                        <!--    <div class="bulk-actions align-left">
                                                                                        <select name="dropdown">
                                                                                                <option value="option1">Choose an action...</option>
                                                                                                <option value="option2">Edit</option>
                                                                                                <option value="option3">Delete</option>
                                                                                        </select>
                                                                                        <a class="button" href="#">Apply to selected</a>
                                                                                </div>

                                                                                <div class="pagination">
                                                                                        <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                                                                                        <a href="#" class="number" title="1">1</a>
                                                                                        <a href="#" class="number" title="2">2</a>
                                                                                        <a href="#" class="number current" title="3">3</a>
                                                                                        <a href="#" class="number" title="4">4</a>
                                                                                        <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                                                                                </div> --> <!-- End .pagination -->
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
