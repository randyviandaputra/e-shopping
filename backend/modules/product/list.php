<div class="container">
  <div class="row">
    <div class="col-md-12 content">
      <h3 class="content-head"><span class="glyphicon glyphicon-list"></span> List Product</h3>
      <div class="col-md-12">
        <?php  
          if (isset($_GET['addProductSuccess'])) {
            echo "<div class='alert alert-success'>Success, Add Product !!</div>";
          } elseif (isset($_GET['addProductFail'])) {
            echo "<div class='alert alert-danger'>Failed, Add Product !!</div>";
          } elseif (isset($_GET['addProductTooLarge'])) {
            echo "<div class='alert alert-danger'>Sorry, Size too large !!</div>";
          } elseif (isset($_GET['addProductExtension'])) {
            echo "<div class='alert alert-danger'>Extention must be png, jpg, and jpeg !!</div>";
          } elseif (isset($_GET['editProductSuccess'])) {
            echo "<div class='alert alert-success'>Success, Edit Product !!</div>";
          } elseif (isset($_GET['editProductFail'])) {
            echo "<div class='alert alert-danger'>Failed, Edit Product !!</div>";
          } elseif (isset($_GET['deleteProductSuccess'])) {
            echo "<div class='alert alert-success'>Success, Delete Product !!</div>";
          } elseif (isset($_GET['deleteProductFail'])) {
            echo "<div class='alert alert-danger'>Failed, Delete Product !!</div>";
          }
        ?>
        <br>
        <form class="form-inline" method="post" action="?product">
          <input type="text" name="search" class="form-control" id="inputEmail3" placeholder="Search">
          <select name="category_id" id="" class="form-control">
          <option value="">All Category</option>
          <?php
            include "../config/connection.php";
            $sql = "SELECT * FROM product_categories";
            $query = mysql_query($sql);
            while ($data = mysql_fetch_assoc($query)) { ?>
            <option value="<?= $data['category_id']?>"><?= $data['category_name']?></option>
          <?php } ?>
          </select>
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <br>
        <div class="pull-left">
          <a href="?addProduct" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Add Product</a>
        </div>
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
              function highlight($text_highlight, $text_search) {
                $str = preg_replace('#'. preg_quote($text_highlight) .'#i', '<span style="font-weight:bold;">\\0</span>', $text_search);
                return $str;
              }

              include '../config/connection.php';
              $no = 1;
              $search = isset($_POST['search']) ? $_POST['search'] : '';
              $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : '';
              $sql = "
                  SELECT p.*, pc.category_name as category_name FROM products p
                  JOIN product_categories pc ON p.category_id = pc.category_id
              ";
              if (!empty($search) || !empty($category_id)) {
                $sql .= "WHERE p.product_name LIKE '%".$search."%' || p.category_id = '$category_id'";
              }
              $query = mysql_query($sql);
              $count = mysql_num_rows($query);
              if ($count == 0) {
                echo "<tr><td colspan='9'>Product Not Found !!!</td></tr>";
              } else {
                while ($data = mysql_fetch_assoc($query)) { 
              ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= highlight($search, $data['product_name']); ?></td>
                      <td><?= highlight($search, $data['product_description']); ?></td>
                      <td><?= $data['product_price'] ?></td>
                      <td><img src="../public/uploads/<?=$data['product_image'] ?>" width="150" height="150" class="img-thumbnail"></td>
                      <td><?= $data['product_inStock'] ?></td>
                      <td><?= $data['category_name'] ?></td>
                      <td><?= $data['product_publish'] ?></td>
                      <td>
                        <a href='?editProduct&id=<?= $data['product_id'] ?>' class='btn btn-xs btn-success'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                        <a href='?deleteProduct&id=<?= $data['product_id'] ?>' class='btn btn-xs btn-danger'><i class='glyphicon glyphicon-trash'></i> Delete</a>
                      </td>
                    </tr>
              <?php
                  $no++;
                }
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>