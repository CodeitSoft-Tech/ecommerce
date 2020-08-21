<?php 

$active = 'User';
include("includes/db_conn.php");
include("includes/header.php");
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Insert User</li>
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
			<label class="col-md-3 control-label">First Name</label>
			<div class="col-md-9">
			<input type="text" name="firstname" class="form-control" required>	
			</div>
			</div>

			<div class="form-group">
		    <label class="col-md-3 control-label">Last Name</label>
		    <div class="col-md-9">
			<input type="text" name="lastname" class="form-control" required>	
		    </div>
			</div>

			<div class="form-group">
		    <label class="col-md-3 control-label">Username</label>
		    <div class="col-md-9">
			<input type="text" name="username" class="form-control" required>	
		    </div>
			</div>

			<div class="form-group">
		    <label class="col-md-3 control-label">Email</label>
		    <div class="col-md-9">
			<input type="email" name="email" class="form-control" required>	
		    </div>
			</div>

			<div class="form-group">
		    <label class="col-md-3 control-label">Password</label>
		    <div class="col-md-9">
			<input type="password" name="password" class="form-control" required>	
		    </div>
			</div>

			<div class="form-group">
			<label class="col-md-3 control-label">User Status</label>
			<div class="col-md-9">
			<select name="slide_status" class="form-control" required>
				<option disabled selected>Select user Status</option>
				<option value="Active">Active</option>
				<option value="Inactive">Inactive</option>
			</select>	
			</div>
			</div>
	

			<div class="form-group">
			<label class="col-md-3 control-label"></label>
			<div class="col-md-9">
			<button type="submit" class="btn btn-primary form-control" name="submit">
			<i class="fa fa-upload"></i> Insert User
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
		$firstname   = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname    = mysqli_real_escape_string($db, $_POST['lastname']);
		$username    = mysqli_real_escape_string($db, $_POST['username']);
		$email       = mysqli_real_escape_string($db, $_POST['email']);
		$password    = mysqli_real_escape_string($db, $_POST['password']);
		$user_status = mysqli_real_escape_string($db, $_POST['user_status']);
	
	
		  $insert_user = "INSERT INTO admin(firstname, lastname, admin_username, admin_email, admin_pass, user_status)VALUES('$firstname','$lastname','$username','$email','$password','$user_status')";

		 $run_user = mysqli_query($db, $insert_user);

		 if($run_user)
		 {
		    echo "<script>alert('new user has been inserted successfully')</script>";
		    echo "<script>document.location='view_user.php'</script>";
		 } 
	}
	


?>
