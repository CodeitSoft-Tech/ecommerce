<?php 

$active = 'Brands';
include("includes/db_conn.php");
include("includes/header.php");
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Insert Brand</li>
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
		<label class="col-md-3 control-label">Brand Name</label>
		<div class="col-md-9">
			<input type="text" name="brand_title" class="form-control" required>	
		</div>
		</div>
		
		<div class="form-group">
		<label class="col-md-3 control-label">Brand Top</label>
		<div class="col-md-9">
			<label>Yes</label>
			<input type="radio" name="brand_top" value="Yes" required>
			<label>No</label>
			<input type="radio" name="brand_top" value="No" required>	
		</div>
		</div>

		<div class="form-group">
		<label class="col-md-3 control-label">Brand Image</label>
		<div class="col-md-9">
			<input type="file" name="brand_image" class="form-control" required>	
		</div>
		</div>
		

			<div class="form-group">
				<label class="col-md-3 control-label"></label>
			<div class="col-md-9">
				<button type="submit" class="btn btn-primary form-control" name="submit">
					<i class="fa fa-upload"></i> Insert Brand
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
		$brand_title = mysqli_real_escape_string($db, $_POST['brand_title']);
		$brand_top = mysqli_real_escape_string($db, $_POST['brand_top']);

		$brand_image = $_FILES['brand_image']['name'];
		$tmp_name    = $_FILES['brand_image']['tmp_name'];

		move_uploaded_file($tmp_name, "brand_images/$brand_image");
		

		$insert_brand = "INSERT INTO brands(brand_title, brand_top, brand_image)VALUES('$brand_title','$brand_top', '$brand_image')";

		$run_brand = mysqli_query($db, $insert_brand);

		if($run_brand)
		{
			echo "<script>alert('Brand inserted successfully')</script>";
			echo "<script>document.location='view_brand.php'</script>"; 
		}
	}

?>
