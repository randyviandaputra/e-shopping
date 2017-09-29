<?php  
  include '../config/connection.php';

  $id = $_GET['id'];
  $sql = "
      SELECT * FROM 
        products
      WHERE 
        product_id = $id
  ";

  $query = mysql_query($sql);
  $data = mysql_fetch_assoc($query);
?>

<div class="container">
  <div class="row">
    <div class="col-md-12 content">
      <h3 class="content-head"><span class="glyphicon glyphicon-plus"></span> Edit Product</h3>
      <div class="col-md-10">
        <form class="form-horizontal" method="post" action="?editedProduct" enctype="multipart/form-data">
            <input type="hidden" name="product_id" value="<?= $data['product_id']?>">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
            <div class="col-sm-10">
              <input type="text" name="product_name" class="form-control" id="inputEmail3" placeholder="Product Name" value="<?= $data['product_name']?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Product Description</label>
            <div class="col-sm-10">
              <textarea name="product_description" id="" class="form-control" cols="30" rows="10" placeholder=""><?= $data['product_description']?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Product Price</label>
            <div class="col-sm-10">
              <div class="input-group">
                <div class="input-group-addon">Rp</div>
                <input type="number" name="product_price" class="form-control" id="inputEmail3" placeholder="Product Price" value="<?= (int) $data['product_price']?>">
                <div class="input-group-addon">00</div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Product Image</label>
            <div class="col-sm-10">
              <input type="file" name="product_image" class="form-control" id="inputEmail3" placeholder="Product Image" value="<?= $data['product_image']?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Product Stok</label>
            <div class="col-sm-10">
              <input type="number" name="product_inStock" class="form-control" id="inputEmail3" placeholder="Product Stok" value="<?= $data['product_inStock']?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Product Category</label>
            <div class="col-sm-10">
              <select name="category_id" id="" class="form-control">
              <?php
                  include "../config/connection.php";

                  $sql = "SELECT * FROM product_categories";
                  $query = mysql_query($sql);

                  while ($category = mysql_fetch_assoc($query)) { 
                    $selected_cat = ($category['category_id'] == $data['category_id']) ? 'selected="selected"' : '';
                    echo "<option value = '".$category['category_id']."' ".$selected_cat.">".$category['category_name']."</option>";
                  } 
              ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="addProduct" class="btn btn-primary" value="addProduct">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>