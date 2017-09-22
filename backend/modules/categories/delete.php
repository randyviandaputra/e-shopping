<?php 
	include '../config/connection.php';

	$id = $_GET['id'];

	$sql = "
		DELETE FROM
			product_categories
		WHERE 
			category_id = '$id';
	";

	$query = mysql_query($sql);

	if ($query) {
		header('location:?categories&deleteCategorySuccess');
	} else {
		header('location:?categories&deleteCategoryFail');
	}
?>