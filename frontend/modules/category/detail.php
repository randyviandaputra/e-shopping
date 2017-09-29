<?php
	include "../config/connection.php";
	$id_category = $_GET['id_category'];
	$sql_category = "SELECT * FRom product_categories where category_id = '$id_category'";
	$query_category = mysql_query($sql_category);
	$data_category = mysql_fetch_assoc($query_category);
?>

<div class="features_items"><!--features_items-->
<h2 class="title text-center"><?= $data_category['category_name'] ?> Items</h2>
<?php
	$sql = "SELECT * FRoM products where category_id = '$id_category'";
	$query = mysql_query($sql);
	$count = mysql_num_rows($query);
	if ($count == 0) {
		echo "<h2>Data Not Found ...</h2>";
	}
	while ($data = mysql_fetch_assoc($query)) {
?>

<div class="col-sm-4">
	<div class="product-image-wrapper">
		<div class="single-products">
			<div class="productinfo text-center">
				<img src="../public/uploads/<?= $data['product_image']?>" class="f_image" />
				<h2><?= $data['product_price'] ?></h2>
				<p><?= $data['product_description'] ?></p>
				<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
			</div>
			<div class="product-overlay">
				<div class="overlay-content">
					<h2><?= $data['product_price'] ?></h2>
					<p><?= $data['product_description'] ?></p>
					<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
			</div>
		</div>
		<div class="choose">
			<ul class="nav nav-pills nav-justified">
				<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
				<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
			</ul>
		</div>
	</div>
</div>

<?php } ?>

</div>
