<?php

	include("includes/db_conn.php");


	$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
	$POSTI = filter_var_array($_POST, FILTER_SANITIZE_NUMBER_INT);


	if(isset($POST['starRate']))
	{
		$starRate = mysqli_real_escape_string($db, $POSTI['starRate']); 
		$rateMsg = mysqli_real_escape_string($db, $POST['rateMsg']); 
		$date = mysqli_real_escape_string($db, $POST['date']); 
		$name = mysqli_real_escape_string($db, $POST['name']); 

		$sql = $db->prepare("SELECT * FROM rate WHERE userName=?");
		$sql->bind_param("s",$name);
		$sql->execute();
		$res = $sql->get_result();
		$rst = $res->fetch_assoc();
		$val = $rst["userName"];

		if(!$val)
		{
			$stmt = $db->prepare("INSERT INTO rate(userName, userReview, userMessage, dateReviewed)VALUES(?, ?, ?, ?)");
			$stmt->bind_param("ssss", $name, $starRate, $rateMsg, $date);
			$stmt->execute();
			echo "Inserted successfully";
		}
		else
		{
          $stmt = $db->prepare("UPDATE rate SET userName = ?, userReview = ?, userMessage = ?, dateReviewed = ? WHERE userName = ?");
			$stmt->bind_param("sssss", $name, $starRate, $rateMsg, $date, $name);
			$stmt->execute();
			echo "Updated successfully";
		}

	}



?>