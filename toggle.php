<?php

	$servername = "localhost";
	$db_user = "root";
	$db_password = "password";
	$db_name = "student_db";

	$conn = new mysqli($servername, $db_user, $db_password, $db_name);

	if($conn->connect_error){
		die("Error: Connection to Database adorted. " . $conn->connect_error);
	}


	$u_id = $_GET['u_id'];
	$type = $_GET['type'];

	if($type == 'active')
	{
		mysqli_query($conn, "UPDATE student SET status = 'inactive' WHERE id = '$u_id'");
		echo "first";
		header("location:/web_lab/admin.php");

	}

	elseif ($type == 'inactive') 
	{
		mysqli_query($conn,"UPDATE student SET status = 'active' WHERE id = '$u_id'");
		echo "second";
		header("location:/web_lab/admin.php");
	}


?>