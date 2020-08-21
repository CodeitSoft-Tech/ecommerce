<?php 

$active = 'Category';
include("includes/db_conn.php");
include("includes/header.php");
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Insert Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-body">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
		<div class="form-group">
		<label class="col-md-3 control-label">Category Name</label>
		<div class="col-md-9">
			<input type="text" name="cat_title" class="form-control" required>	
		</div>
			</div>
		

		 

		<div class="form-group">
		<label class="col-md-3 control-label">Category Status</label>
		<div class="col-md-9">
		<select name="cat_status" class="form-control" required>
			<option disabled selected>Select category Status</option>
			<option value="Active">Active</option>
			<option value="Inactive">Inactive</option>
		</select>	
		</div>
		</div>

		  <div class="form-group">
            <label class='control-label col-sm-3'>Category Description</label>
              	<div class='col-sm-9'>
                <textarea name="cat_desc" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          	
		          </textarea>
		          </div>
		          </div>

			<div class="form-group">
				<label class="col-md-3 control-label"></label>
			<div class="col-md-9">
				<button type="submit" class="btn btn-primary form-control" name="submit">
					<i class="fa fa-upload"></i> Insert Category
				</button> 
			</div>
		</div>
			</form>
			    </div>
				</div>
			</div>
		</div>

                
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
<?php
	
	if(isset($_POST['submit']))
	{
		$cat_title = mysqli_real_escape_string($db, $_POST['cat_title']);
		$cat_status = mysqli_real_escape_string($db, $_POST['cat_status']);
		$cat_desc = mysqli_real_escape_string($db, $_POST['cat_desc']);

		$insert_cat = "INSERT INTO categories(cat_title, cat_status, cat_desc)VALUES('$cat_title','$cat_status', '$cat_desc')";

		$run_cat = mysqli_query($db, $insert_cat);

		if($run_cat)
		{
			echo "<script>alert('Category has been inserted successfully')</script>";
			echo "<script>document.location='view_category.php'</script>"; 
		}
	}

?>
