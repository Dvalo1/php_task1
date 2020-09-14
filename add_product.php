<?php 
	require_once("db.php");
	if (isset($_POST["product_name"], $_POST["description"])) {
		
		$productName = mysqli_real_escape_string($conn, $_POST["product_name"]);
		$productDesc = mysqli_real_escape_string($conn, $_POST["description"]);
		$sql="INSERT INTO `products`(`product_name`, `description`) 
			VALUES ('$productName','$productDesc')";

		if ($conn->query($sql) === TRUE) {
			echo "Products have been added";
		}
		else{
			"error:". $conn->error;
		}
	
	}
?>