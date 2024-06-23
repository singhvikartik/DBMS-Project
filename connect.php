<?php


	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$Password = $_POST['Password'];
	//$ID = $_POST['ID'];

	// Database connection
	$conn = new mysqli('localhost','root','','202001210_db');

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO registeruser (first_name, last_name, email, Password) values(?, ?, ?, ?)");
		$stmt->bind_param('ssss', $first_name, $last_name, $email, $Password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully... Redirecting to Shopping";
		$stmt->close();
		$conn->close();
	}

?>
