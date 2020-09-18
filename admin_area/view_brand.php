<?php 

$active = 'Brands';
include("includes/header.php"); ?>
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Brands</li>
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
                  <th>Brand Name</th>             
                  <th>Brand Top</th>
                  <th>Brand Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT * FROM brands";
                    $query = mysqli_query($db, $sql) or die(mysqli_error($db));


                    if(mysqli_num_rows($query))
                    {
                        while($row = mysqli_fetch_array($query))
                        {

                  ?>
                    <tr>
                      <td><?php echo $row['brand_id'];  ?></td>
                      <td><?php echo $row['brand_title'];  ?></td>
                      <td><?php echo $row['brand_top'];  ?></td>
                      <td><img src="brand_images/<?php echo $row['brand_image']; ?>" alt="Brand Images" width="60" height="60"></td>

                       <td>
                      <a href="#update<?php echo $row['brand_id'];?>" data-target="#update<?php echo $row['brand_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer">
                          <i class="fa fa-edit text-blue"></i></a>

                      <a href="#delete<?php echo $row['brand_id'];?>" data-target="#delete<?php echo $row['brand_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="fa fa-trash text-red"></i></a> 
                      </td>
                    </tr>

                      <!-- Update Modal -->  

      <div id="update<?php echo $row['brand_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Update Brand Details</h4>
              </div>
              <div class="modal-body">

            <form class="form-horizontal" method="post" action="brand_update.php" enctype='multipart/form-data'>
                    
            <div class="form-group">
              <label class="control-label">Brand Name</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="brand_id" value="<?php echo $row['brand_id'];?>" required>  
                <input type="text" class="form-control" name="brand_title" value="<?php echo $row['brand_title'];?>" required>  
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label">Brand Top</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="brand_id" value="<?php echo $row['brand_id'];?>" required>  
               <select name="brand_top" class="form-control">
                 <option value="<?php echo $row['brand_top']; ?>"><?php echo $row['brand_top']; ?></option>
                 <option>
                   <?php

                      if($row['brand_top'] == 'Yes')
                      {
                        echo "No";
                      }

                      else
                      {
                        echo "Yes";
                      }


                   ?>
                 </option>
               </select>
              </div>
            </div> 


             <div class="form-group">
              <label class="control-label">Brand Image</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="brand_id" value="<?php echo $row['brand_id']; ?>">  
                
                <input type="file" class="form-control" name="brand_image">  <br>

                <img width="70" height="70" src="brand_images/<?php echo $row['brand_image']; ?>" alt="<?php echo $row['brand_title']; ?>">

              </div>
            </div> 
       
         
               
                  </div><br><br><br>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Brand</button>
                  </div>
                 </form>
                  </div>
              </div><!--end of modal-dialog-->
           </div>


            <!-- Delete  Modal -->
          <div id="delete<?php echo $row['brand_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Delete Brand</h4>
              </div>
              <div class="modal-body">
              <form class="form-horizontal" method="post" action="brand_del.php">
             
                  <input type="hidden" class="form-control" name="brand_id" value="<?php echo $row['brand_id'];?>" required> 
                      
                    <p>Are you sure you want to remove <?php echo $row['brand_title']; ?>?</p>
              
                    </div><br>
                    <div class="modal-footer">
                     
                      <a href="delete<?php echo $row['brand_id'];?>" style="color: #ffffff;">
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
                  <th>Brand Name</th>             
                  <th>Brand Top</th>
                  <th>Brand Image</th>
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