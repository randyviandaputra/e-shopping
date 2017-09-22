<?php  
	include '../config/connection.php';

	$id = $_POST['category_id'];
	$category_name = $_POST['category_name'];

	$sql = "
		UPDATE 
			product_categories
		SET 
			category_name = '$category_name'
		WHERE 
			category_id = '$id';
	";

	$query = mysql_query($sql);

	if ($query) {
		header('location:?categories&editCategorySuccess');
	} else {
		header('location:?categories&editCategoryFail');
	}

?>