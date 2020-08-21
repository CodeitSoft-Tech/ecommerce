<?php 

$active = 'User';
include("includes/header.php"); ?>
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">View Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Content Begin -->
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>No.</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Status</th>              
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT * FROM admin";
                    $query = mysqli_query($db, $sql) or die(mysqli_error($db));


                    if(mysqli_num_rows($query))
                    {
                        while($row = mysqli_fetch_array($query))
                        {

                  ?>
                    <tr>
                      <td><?php echo $row['admin_id'];  ?></td>
                      <td><?php echo $row['firstname'];  ?></td> 
                      <td><?php echo $row['lastname'];  ?></td> 
                      <td><?php echo $row['admin_username'];  ?></td> 
                      <td><?php echo $row['admin_email'];  ?></td> 
                      <td>
                        <?php 
                            if($row['admin_status'] == 'Active')
                            {
                                echo "<div class='badge bg-green'>Active</div>";
                            }
                            else
                            {
                                echo "<div class='badge bg-red'>Inactive</div>";
                            }  

                        ?>
                        </td>             
                       <td>

                         <a href="#update<?php echo $row['admin_id'];?>" data-target="#update<?php echo $row['admin_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer">
                          <i class="fa fa-edit text-blue"></i></a>

                      <a href="#delete<?php echo $row['admin_id'];?>" data-target="#delete<?php echo $row['admin_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="fa fa-trash text-red"></i></a> 
                      </td>
                    </tr>

                          <!-- Update Modal -->      
      <div id="update<?php echo $row['admin_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Update User Details</h4>
              </div>
              <div class="modal-body">

            <form class="form-horizontal" method="post" action="user_update.php" enctype='multipart/form-data'>
                    
            <div class="form-group">
              <label class="control-label">First Name</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="admin_id" value="<?php echo $row['admin_id'];?>" required>  
                <input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname'];?>" required>  
              </div>
            </div>  

            <div class="form-group">
              <label class="control-label">Last Name</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="admin_id" value="<?php echo $row['admin_id'];?>" required>  
                <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname'];?>" required>  
              </div>
            </div>  

            <div class="form-group">
              <label class="control-label">Username</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="admin_id" value="<?php echo $row['admin_id'];?>" required>  
                <input type="text" class="form-control" name="username" value="<?php echo $row['admin_username'];?>" required>  
              </div>
            </div>  

            <div class="form-group">
              <label class="control-label">Email</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="admin_id" value="<?php echo $row['admin_id'];?>" required>  
                <input type="email" class="form-control" name="email" value="<?php echo $row['admin_email'];?>" required>  
              </div>
            </div>

            <div class="form-group">
              <label class="control-label">Password</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="admin_id" value="<?php echo $row['admin_id'];?>" required>  
                <input type="password" class="form-control" name="password" value="<?php echo $row['admin_pass'];?>" required>  
              </div>
            </div>    
       
            <div class="form-group">
              <label class="control-label">Admin Status</label>
              <div class="col-sm-9">
               <select class="form-control" name="admin_status" style="width: 100%;" required oninput="SetCustomValidation()" oninvalid="SetCustomValidation('Select admin status')" >
                 <option value="<?php echo $row['admin_status'];?>"><?php echo $row['admin_status'];?></option>
                 <option value="Inactive">Inactive</option>
              </select>
              </div>
            </div>  
          
                  </div><br><br><br>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update User</button>
                  </div>
                 </form>
                  </div>
              </div><!--end of modal-dialog-->
           </div>


            <!-- Delete  Modal -->
          <div id="delete<?php echo $row['admin_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Delete Admin Details</h4>
              </div>
              <div class="modal-body">
              <form class="form-horizontal" method="post" action="admin_del.php">
             
                  <input type="hidden" class="form-control" name="admin_id" value="<?php echo $row['admin_id'];?>" required> 
                      
                    <p>Are you sure you want to remove <?php echo $row['admin_username']; ?>?</p>
              
                    </div><br>
                    <div class="modal-footer">
                     
                      <a href="delete<?php echo $row['admin_id'];?>" style="color: #ffffff;">
                         <button type="submit" name="delete" class="btn btn-primary">
                          Yes </button></a>
                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
              </form>
            </div>
        </div><!--end of modal-dialog-->
      </div>             
                  
      
                  <?php } } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No.</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Status</th>              
                  <th>Action</th>
                  </tr>
                  </tfoot>
                </table>    
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

<?php include("includes/footer.php"); ?>
<?php include("includes/footer_links.php"); ?>