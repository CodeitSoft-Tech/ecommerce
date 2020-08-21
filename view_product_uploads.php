<center style="margin-top: 50px;">
	<h1>Uploaded Products</h1>
	<p class="text-muted">
		Product will be waiting for approval from administrator, you will be notified when approval is done. 
	</p>
</center>

<hr>

<div class="table-responsive">
 <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Product Name</th>
                  <th>Product Image 1</th>
                  <th>Product Image 2</th>
                  <th>Product Image 3</th>
                  <th>Product Price</th>
                  <th>Discount Price</th>
                  <th>Promo Price</th>
                  <th>Product Qty</th>
                  <th>Product Keywords</th>
                  <th>Product Status</th>
                  <th>Product Specs</th>
                  <th>Product Desc</th>
                  <th>Approval Status</th>                
                  <th>Action</th>
                </tr> 
                </thead>
                <tbody>
               <?php

               $customer_session = $_SESSION['customer_name'];

               $get_customer = "SELECT * FROM customers WHERE customer_name ='$customer_session'";
               $run_customer = mysqli_query($db, $get_customer);
               $row_customer = mysqli_fetch_array($run_customer);
               $customer_id = $row_customer['customer_id'];
              

              $get_approvals = "SELECT * FROM pending_approvals WHERE Seller_id = '$customer_id'";
              $run_approvals = mysqli_query($db, $get_approvals);

        
        while($row_approvals = mysqli_fetch_array($run_approvals))
        {
            $pending_id    = $row_approvals['pending_id'];
            $product_title = $row_approvals['product_title'];
            $product_img1  = $row_approvals['product_img1'];
            $product_img2  = $row_approvals['product_img2'];
            $product_img3  = $row_approvals['product_img3'];
            $product_price = $row_approvals['product_price'];
            $discount_price = $row_approvals['discount_price'];
            $promo_price    = $row_approvals['promo_price'];
            $product_qty    = $row_approvals['product_qty'];
            $product_keywords = $row_approvals['product_keywords'];
            $product_status = $row_approvals['product_status'];
            $product_specs = $row_approvals['product_specs'];
            $product_desc = $row_approvals['product_desc'];
            $product_status = $row_approvals['product_status'];
            

            if($row_approvals['approval_status'] == 'Pending')
            {
               $approval_status =  "<span class='badge bg-red'> Pending </span>";
            }
            else
            {
              $approval_status = "<span class='badge bg-green'> Approved </span>";
            }

            
       ?>
      <tr>
        <td><?php echo $pending_id; ?></td>
        <td><?php echo $product_title; ?></td>
        <td><?php echo $product_img1; ?></td>
        <td><?php echo $product_img2; ?></td>
        <td><?php echo $product_img3; ?></td>
        <td><?php echo $product_price; ?></td>
        <td><?php echo $discount_price; ?></td>
        <td><?php echo $promo_price; ?></td>
        <td><?php echo $product_qty; ?></td>
        <td><?php echo $product_keywords; ?></td>
        <td><?php echo $product_status; ?></td>
        <td><?php echo $product_specs; ?></td>
        <td><?php echo $product_desc; ?></td>
        <td><?php echo $approval_status; ?></td>
        <td>
            <a href="#delete<?php echo $row['pending_id'];?>" data-target="#delete<?php echo $row['pending_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="fa fa-trash text-red"></i></a> 

        </td>
      </tr>
    <?php } ?>
      </tbody>
  </table>
</div>