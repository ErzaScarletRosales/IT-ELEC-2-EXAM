<div class="table-responsive">
                  <?php
                    $connection = mysqli_connect("localhost","root","","apple");

                    $query = "SELECT * FROM register";
                    $query_run = mysqli_query($connection,$query);
                  
                  ?>
                  <table
                    id="example" class="table table-striped data-table" style="width: 100%">

                    <thead>
                      <tr>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Info</th>
                      </tr>
                    </thead>

                    <tbody>
                     <?php

                     if(mysqli_num_rows($query_run)>0)
                      {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                          ?>
                          <tr>
                            <td><?php echo $row['firstname']?></td>
                            <td><?php echo $row['lastname']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['password']?></td>
                            <td>
                              <form action="edit.php" method="POST">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_btn" class="btn btn-primary">Edit</button>
                              </form>
                            </td>
                            <td>
                              <form action="code.php" method="POST">
                              <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                              <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                              </form>
                            </td>
                            <td><button type="submit" class="btn btn-warning">Info</button></td>
                          </tr>
                          <?php
                        }

                      }   
                      else

                      {
                        echo "No Record Found";
                      }

                     ?>
                      
                    </tfoot>
                  </table>
                </div>
              </div>