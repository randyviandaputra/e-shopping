<?php 
  include '../config/connection.php';

  $id = $_GET['id'];

  $sql = "
        SELECT * FROM 
          product_categories
        WHERE 
          category_id = $id
  ";

  $query = mysql_query($sql);
  $data = mysql_fetch_assoc($query);
?>

<div class="container">
  <div class="row">
    <div class="col-md-12 content">
      <h3 class="content-head"><span class="glyphicon glyphicon-plus"></span> Edit Category Product</h3>
      <div class="col-md-10">
        <form class="form-horizontal" method="post" action="?editedCategory" enctype="multipart/form-data">
            <input type="hidden" name="category_id" value="<?= $data['category_id']?>">
          <div class="form-group">
            <label for="category_name" class="col-sm-2 control-label">Category Name</label>
            <div class="col-sm-10">
              <input type="text" name="category_name" class="form-control" id="category_name" value="<?= $data['category_name']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="addCategory" class="btn btn-primary" value="addCategory">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>