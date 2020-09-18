<?php 

$active = 'Deal';
include("includes/db_conn.php");
include("includes/header.php");
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Insert Deal</li>
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
		        <form  class="form-horizontal" method="post" enctype="multipart/form-data">
				
					<div class="form-group">
					<label class="col-md-3 control-label">Deal Title</label>
					<div class="col-md-9">
					<input type="text" name="deal_title" class="form-control" required>	
					</div>
					</div>

					<div class="form-group">
					<label class="col-md-3 control-label">Deal Short Description</label>
					<div class="col-md-9">
					<input type="text" name="deal_short_desc" class="form-control" required>	
					</div>
					</div>

					<div class="form-group">
					<label class="col-md-3 control-label">Deal Image</label>
					<div class="col-md-9">
						<input type="file" name="deal_img" class="form-control" required>	
					</div>
					</div>

					<div class="form-group">
				    <label class="col-md-3 control-label">Button Text</label>
				    <div class="col-md-9">
					<input type="text" class="form-control" name="deal_btn_text" required>
				    </div>
					</div>

					<div class="form-group">
				    <label class="col-md-3 control-label">Deal Url</label>
				    <div class="col-md-9">
					<input type="text" class="form-control" name="deal_url" required>
				    </div>
					</div>

					<div class="form-group">
					<label class="col-md-3 control-label"></label>
					<div class="col-md-9">
					<button type="submit" class="btn btn-primary form-control" name="submit">
					<i class="fa fa-upload"></i> Insert Deal
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
		$deal_title   	  = mysqli_real_escape_string($db, $_POST['deal_title']);
		$deal_btn_text    = mysqli_real_escape_string($db, $_POST['deal_btn_text']);
		$deal_short_desc  = mysqli_real_escape_string($db, $_POST['deal_short_desc']);
		$deal_url 		  = mysqli_real_escape_string($db, $_POST['deal_url']);

		$deal_img    = $_FILES['deal_img']['name'];
		$tmp_name 	 = $_FILES['deal_img']['tmp_name'];

		move_uploaded_file($tmp_name, "deal_images/$deal_img");
	
		$view_deal = "SELECT * FROM product_deals";
		
		$run_deal = mysqli_query($db, $view_deal);

		$count = mysqli_num_rows($run_deal); 

		if($count < 3)
		{

		  $insert_deal = "INSERT INTO product_deals(deal_title, deal_short_desc, deal_img, deal_btn_title, deal_url)VALUES('$deal_title','$deal_short_desc', '$deal_img','$deal_btn_text', '$deal_url')";

		 $run_deal = mysqli_query($db, $insert_deal);

		echo "<script>alert('Deal inserted successfully')</script>";
		echo "<script>document.location='view_deal.php'</script>"; 
	}
		else
		{
			echo "<script>alert('Only 3 boxes can be inserted!')</script>";
		}

	}

?>
