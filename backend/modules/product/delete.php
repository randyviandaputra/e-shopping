<?php  
	include '../config/connection.php';

	$id = $_GET['id'];

	$sql = "
		DELETE FROM 
			products
		WHERE
			product_id = '$id';
	";

	$query = mysql_query($sql);

	if (query) {
		header('location:?product&deleteProductSuccess');
	} else {
		header('location:?product&deleteProductFail');
	}

?>