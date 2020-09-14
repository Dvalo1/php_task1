<?php 
	$servername = "localhost";
	$username = "root";
	$password="";
	$db = "phpooptest";
	$conn = new mysqli($servername, $username, $password, $db);

	if($conn->connect_error) {
		die("Connection failed");
	} else {
		//echo "yea";
	}
 ?>