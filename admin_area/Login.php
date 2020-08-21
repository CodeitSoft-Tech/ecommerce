
<?php
    
    session_start();
    include("includes/db_conn.php");
    include("user_login.php");    
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">;
        <meta charset="utf-8">
         <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
         <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="icon.png">
     </head>
    <style type="text/css">
        
        body
        {
            margin: 0;
            padding: 0;
            background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(background.jpg);
            background-size: cover;
            background-position: center;
        }
        
        .parent
        {
            margin-left: 50%;
            margin-top: 25%;
            transform: translate(-50%,-50%);
            border-radius: 5px;
            padding: 20px;
            /*box-shadow: 0 0 6px grey;*/
            background-color: rgba(0,0,0,0.9);
            width: 350px;
        }
        
        input[type="text"], input[type="password"]
        {
            padding: 10px;
            outline: none;
            font-family: century gothic;
            border-radius: 50px;
            width: 200px;
            margin-left: 50%;
            transform: translate(-50%,0%);
        }
        input
        {
            margin-top: 20px;
        }
        
        form
        {
            margin-top: 20px;
        }
        
        h2
        {
            font-family: century gothic;
            margin-left: 50%;
            transform: translate(-50%,0%);
            color:white;
        }
        
        button
        {
            padding: 10px;
            background-color: orangered;
            color: white;
            outline: none;
            border:none;
            width: 100px;
            border-radius: 50px;
            margin-left: 50%;
            margin-top: 40px;
            transform: translate(-50%,0%);
            font-family: century gothic;
        }
        
    </style>
    <body>
        <div class="parent">
            <h2>LOGIN PAGE</h2>
            <form action="login.php" method="post">

            <div class="messages">
              <?php 
                  if($ErrorLogin)
                  {
                    foreach ($ErrorLogin as $key => $value) {
                      echo '<div class="alert alert-danger  role="alert">
                      <i class="fa fa-exclamation text-white"></i>
                      '.$value.'
                      </div>';
                    }
                  }

              ?>
            </div>
  
            <input type="text" name="admin_name" placeholder="Username"><br><br>
            <input type="password" name="admin_pass" placeholder="Password"><br><br>
            <button type="submit" name="btn_login">Login</button>

            <p><a href="forgot_password.php"> Forgot password?</a></p>
            </form>
        </div>








        <!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- overlayScrollbars -->

<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>

    </body>
</html>