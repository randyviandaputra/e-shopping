<div class="container">
  <div class="row">
    <div class="col-md-12 content">
      <h3 class="content-head"><span class="glyphicon glyphicon-list"></span> List Product</h3>
      <div class="col-md-10">
        <a href="?addProduct" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Add Product</a>
        <?php  
          if (isset($_GET['addProductSuccess'])) {
            echo "<div class='alert alert-success'>Success, Add Product !!</div>";
          } elseif (isset($_GET['addProductFail'])) {
            echo "<div class='alert alert-danger'>Failed, Add Product !!</div>";
          } elseif (isset($_GET['addProductTooLarge'])) {
            echo "<div class='alert alert-danger'>Sorry, Size too large !!</div>";
          } elseif (isset($_GET['addProductExtension'])) {
            echo "<div class='alert alert-danger'>Extention must be png, jpg, and jpeg !!</div>";
          }
        ?>
        <table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-bordered" id="example">
          <thead>
            <tr>
              <th>No.</th>
              <th>Product Name</th>
              <th>Product Description</th>
              <th>Product Price</th>
              <th>Product Image</th>
              <th>Product inStock</th>
              <th>Category Name</th>
              <th>Product Publish</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              include '../config/connection.php';
              $no = 1;
              $sql = "
                  SELECT p.*, pc.category_name as category_name FROM products p
                  JOIN product_categories pc ON p.category_id = pc.category_id
              ";
              $query = mysql_query($sql);

              while ($data = mysql_fetch_assoc($query)) { 
            ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['product_name'] ?></td>
                    <td><?= $data['product_description'] ?></td>
                    <td><?= $data['product_price'] ?></td>
                    <td><img src="../public/uploads/<?=$data['product_image'] ?>" width="150" height="150" class="img-thumbnail"></td>
                    <td><?= $data['product_inStock'] ?></td>
                    <td><?= $data['category_name'] ?></td>
                    <td><?= $data['product_publish'] ?></td>
                    <td>
                      <a href='?editkategori&id=<?= $data['product_id'] ?>' class='btn btn-xs btn-success'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                      <a href='?hapuskategori&id=<?= $data['product_id'] ?>' class='btn btn-xs btn-danger'><i class='glyphicon glyphicon-trash'></i> Delete</a>
                    </td>
                  </tr>
            <?php
                $no++;
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>