<?php 
$connection = mysqli_connect("localhost","root","","sir franz);
?>

<div class="container-xl my-5 p-5">
    <div class="col p-5 ">
        
        
            <?php
              
                if(isset ($_POST['edit_btn']))
                {
                    $id=$_POST['edit_id'];
                
                    $query = "SELECT * FROM mae where id='$id'";
                    $query_run = mysqli_query($connection, $query);

                    foreach($query_run as $row)
                    {
                        ?>
                          <form action="code.php" method="POST">

                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Edit ID</label>
                                <input type="text" name="edit_id" value="<?php echo $row['id']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Edit First Name</label>
                                <input type="text" name="edit_firstname" value="<?php echo $row['firstname']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Edit Last Name</label>
                                <input type="text" name="edit_firstname" value="<?php echo $row['lastname']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Edit Email</label>
                                    <input type="email" name="edit_email" value="<?php echo $row['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Edit Password</label>
                                    <input type="password" name="edit_password" value="<?php echo $row['password']; ?>"  class="form-control" id="exampleInputPassword1">
                                </div>
                                                
                                <div class="modal-footer">
                                <a href="tables.php" class="btn btn-primary">Close</a>
                                <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
                            </div>
                         </form>
                        <?php

                    }
                }
            ?>    
        
    </div>
</div>