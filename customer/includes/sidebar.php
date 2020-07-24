<div class="card" style="margin-top: 50px; margin-bottom: 50px;">
  <div class="card-header">
  	<center>    
  		<img src="customer_images/user.jpg" alt="User Image">
  	</center>
  	<br/>
  	<h3 align="center" class="card-title">
  		Username
  	</h3>
  </div>
  <div class="card-body">
  	<ul class="list-group list-group-flush">
  		<li class="<?php if(isset($_GET['my_orders'])){echo"active";} ?> list-group-item">
			<a href="my_account.php?my_orders">
				
				<i class="fa fa-list"></i> My Orders 
			</a>
   </li>	
		<li class="<?php if(isset($_GET['edit_account'])){echo"active";} ?> list-group-item">
			<a href="my_account.php?edit_account">
				
				<i class="fa fa-pencil"></i> Edit Account
			</a>
		</li>	
		<li class="<?php if(isset($_GET['address_book'])){echo"active";} ?> list-group-item">
			<a href="my_account.php?address_book">
				
				<i class="fa fa-book"></i> Address Book
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