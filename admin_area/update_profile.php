<?php
      
      
 

$active = 'setting';


include("includes/header.php");
include("includes/db_conn.php");


 ?>

<?php

  // Update Admin Script

    include("includes/db_conn.php");

    if(isset($_POST['update_user']))
    {
       $user_id   = $_POST['user_id']; 
       $firstname = $_POST['firstname'];
       $lastname  = $_POST['lastname'];
       $username  = $_POST['username'];


       $sql = "UPDATE users SET FIRSTNAME = '$firstname', LASTNAME = '$lastname', USERNAME = '$username' WHERE USER_ID = '$user_id'";

       $query = mysqli_query($conn, $sql);


       if($query)
       {
         echo "<script>alert('Update done successfully')</script>";
         echo "<script>window.document='update_profile.php'</script>";
       }

    }

?>

<?php
        
        // change password script

        $errorPass = array();

        if(isset($_POST['change_pass']))
        {

           $old_pass = $_POST['old_pass'];
           $new_pass = $_POST['new_pass'];
           $con_pass = $_POST['con_pass'];


             if(empty($old_pass) || empty($new_pass) || empty($con_pass))
                {
                  if($old_pass == "")
                  {
                    $errorPass[] = "Enter current password";
                  }

                  if($new_pass == "")
                  {
                    $errorPass[] = "Enter new password";
                  }

                  if($con_pass == "")
                  {
                    $errorPass[] = "Confirm password";
                  }

                   if($new_pass != $con_pass)
                  {
                    $errorPass[] = "Passwords do not match";
                  }

                }

                else
                {
                  $sql = "SELECT * from users";
                  $query = mysqli_query($conn, $sql);

                  while($row = mysqli_fetch_array($query))
                  {
                     $user_id = $row['USER_ID'];
                     $pass    = $row['PASSWORD']; 
                  }

                  if($old_pass != $pass)
                  {
                     $errorPass[] = "Incorrect current password";
                  }
                   else
                  {
                      $pass_in = "UPDATE users SET PASSWORD = '$new_pass' WHERE USER_ID = '$user_id'";
                      $pass_query = mysqli_query($conn, $pass_in);

                      if($pass_query)
                      {
                        echo "<script>alert('Password changed successfully')</script>";
                        echo "<script>window.document='update_profile.php'</script>";
                      }
                      
                  }

                }

              }
?>



<?php
   
  // Display Data in form fields script

      $sql = "SELECT * FROM users";
      $query = mysqli_query($conn, $sql);

      while($row = mysqli_fetch_array($query))
      {
        $user             = $row['USER_ID'];
        $firstname        = $row['FIRSTNAME'];
        $lastname         = $row['LASTNAME'];
        $password         = $row['PASSWORD'];

?>



<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="margin-bottom:30px;">Update Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-body">
                 <form method="post" action="update_profile.php">
                  <h3 style="margin-bottom: 20px;">Admin Information</h3>

                    <div class="col-md-6 form-group">      
                    <input type="hidden" name="user_id" value="<?php echo $row['USER_ID']; ?>" class="form-control">
                   </div>


                   <div class="col-md-6 form-group">  
                    <label for="AdminName">First Name</label>
                    <input type="text" name="firstname"  value="<?php echo $row['FIRSTNAME']; ?>" class="form-control" required>
                   </div>

                    <div class="col-md-6 form-group">
                    <label for="AdminName">Last Name</label>
                    <input type="text" name="lastname" value="<?php echo $row['LASTNAME']; ?>" class="form-control" required>
                   </div>


                    <div class="col-md-6 form-group">
                    <label for="AdminName">UserName</label>
                    <input type="text" name="username" value="<?php echo $row['USERNAME']; ?>" class="form-control" required>
                   </div>

                   <button type="submit" class="btn btn-primary" name="update_user">Update Profile</button>
                 </form>
                  <?php } ?>

                   <hr>

                   <form action="update_profile.php" method="post">
                    <div class="messages">
                          <?php 
                        if($errorPass)
                        {
                          foreach ($errorPass as $key => $value) {
                            echo '<div class="alert alert-danger  role="alert">
                            <i class="fa fa-exclamation text-white"></i>
                            '.$value.'
                            </div>';
                          }
                        }

                        ?>
                    </div>
                   <h3 style="margin-bottom: 20px;">Change Password</h3>


                    <div class="col-md-6 form-group">      
                    <input type="hidden" name="user_id" value="<?php echo $row['USER_ID']; ?>" class="form-control">
                   </div>


                   <div class="col-md-6 form-group">
                    <label for="OldPass">Current Password</label>
                    <input type="password" name="old_pass" placeholder="Old Password" class="form-control">
                   </div>

                    <div class="col-md-6 form-group">
                    <label for="NewPass">New Password</label>
                    <input type="password" name="new_pass" placeholder="New Password" class="form-control">
                   </div>

                    <div class="col-md-6 form-group">
                    <label for="ConPass">Confirm Password</label>
                    <input type="password" name="con_pass" placeholder="Confirm Password" class="form-control">
                   </div>

                    <button type="submit" class="btn btn-primary" name="change_pass">Change Password</button>

                 </form>
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

