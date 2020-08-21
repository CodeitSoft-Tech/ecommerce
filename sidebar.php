


<div class="card" style="margin-top: 50px; margin-bottom: 50px;">
  <div class="card-header">
  	<h3 align="center" class="card-title">
  		<div class="sinlge-bar">
		<a href="#" class="single-icon">
								<!--<i class="fa fa-user-circle-o" aria-hidden="true"></i>-->
			<?php

				if(!isset($_SESSION['customer_name']))
				{
				  echo "<script>document.location='sell.php'</script>";
				}
				else
				{
					echo $_SESSION['customer_name'];
				}
															  
			?>
		</a>
	</div>
  	</h3>
  </div>
  <div class="card-body">
  	<ul class="list-group list-group-flush">
  		<li class="<?php if(isset($_GET['my_uploads'])){echo"active";} ?> list-group-item">
			<a href="seller_dashboard.php?my_uploads">
				
				<i class="fa fa-upload"></i> Upload Product 
			</a>
         </li>	
				<li class="<?php if(isset($_GET['view_product_uploads'])){echo"active";} ?> list-group-item">
						<a href="seller_dashboard.php?view_product_uploads">
				
				<i class="fa fa-pencil"></i> View Product
			</a>
		</li>	
		<li class="<?php if(isset($_GET['address_book'])){echo"active";} ?> list-group-item">
			<a href="seller_dashboard.php?address_book">
				
				<i class="fa fa-book"></i> Business Address
			</a>
		</li>	
		<li class="<?php if(isset($_GET['change_pass'])){echo"active";} ?> list-group-item">
			<a href="my_account.php?change_pass">
				
				<i class="fa fa-user"></i> Change Password
			</a>
		</li>
		<li class="<?php if(isset($_GET['delete_account'])){echo"active";} ?> list-group-item">
			<a href="my_account.php?delete_account">
				
				<i class="fa fa-trash-o"></i> Delete Account 
			</a>
		</li>
		<li class="list-group-item">
			<a href="logout.php">
				<i class="fa fa-sign-out"></i> Logout
			</a>
		</li>			
  	</ul>
  </div>
</div>