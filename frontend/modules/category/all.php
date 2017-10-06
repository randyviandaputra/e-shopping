
<div class="features_items"><!--features_items-->
<h2 class="title text-center">All Product</h2>
<?php
	$sql = "SELECT p.*, c.category_name as category_name
        FROM products p 
        JOIN product_categories c ON c.category_id = p.category_id
    ";
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
                <h4><?= $data['category_name'] ?></h4>
				<p><?= substr($data['product_description'], 0, 100); ?></p>
				<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
			</div>
			<div class="product-overlay">
				<div class="overlay-content">
					<h2><?= $data['product_price'] ?></h2>
					<h4><?= $data['category_name'] ?></h4>
					<p><?= substr($data['product_description'], 0, 100); ?></p>
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
