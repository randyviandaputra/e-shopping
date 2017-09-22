<?php 
	include '../config/connection.php';

	$category_name = $_POST['category_name'];

	$sql = "
			INSERT INTO
				product_categories (category_name)
			VALUES	(
				'$category_name'
			)
	";

	$query = mysql_query($sql);

	if (query) {
		header('location:?categories&addCategorySuccess');
	} else {
		header('location:?categories&addCategoryFail');
	}

?>