<?php

	
		$recipient = $_POST['seller_email'];
		$remarks = $_POST['product_remark'];
		$title  = "MyShop";
		$msg_title = "Remarks On Your Products";
		$caution = "Do not reply this mail";
		
		$mailBody = "Name: $title\nTitle: $msg_title\nSub-Title: $msg_title\n\n\n$remarks\n\n\n$caution";

		 $send_mail = mail($recipient, $msg_title, $mailBody, "From:$title <$msg_title>");

		 if($send_mail)
		 {
		 	echo "<script>alert('Message sent successfully!')</script>";
		 	echo "<script>document.location='approve_products.php'</script>";
		 }
	 
	


?>