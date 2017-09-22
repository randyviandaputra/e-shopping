<div class="container">
  <div class="row">
    <div class="col-md-12 content">
      <h3 class="content-head"><span class="glyphicon glyphicon-list"></span> List Categories Product</h3>
      <div class="col-md-10">
        <?php  
          if (isset($_GET['addCategorySuccess'])) {
            echo "<div class='alert alert-success'>Success, Add Category !!</div>";
          } elseif (isset($_GET['addCategoryFail'])) {
            echo "<div class='alert alert-danger'>Failed, Add Category !!</div>";
          } elseif (isset($_GET['editCategorySuccess'])) {
            echo "<div class='alert alert-success'>Success, Edit Category !!</div>";
          } elseif (isset($_GET['editCategoryFail'])) {
            echo "<div class='alert alert-danger'>Failed, Edit Category !!</div>";
          } elseif (isset($_GET['deleteCategorySuccess'])) {
            echo "<div class='alert alert-success'>Success, Delete Category !!</div>";
          } elseif (isset($_GET['deleteCategoryFail'])) {
            echo "<div class='alert alert-danger'>Failed, Delete Category !!</div>";
          }
        ?>
        <br>
        <form class="form-inline" method="post" action="?categories">
          <input type="text" name="search" class="form-control" id="inputEmail3" placeholder="Search">
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <br>
        <div class="pull-left">
          <a href="?addCategory" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Add Category</a>
        </div>
        <table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-bordered" id="example">
          <thead>
            <tr>
              <th>No.</th>
              <th>Category Name</th>
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
                  SELECT * FROM product_categories
              ";
              if (!empty($search) || !empty($category_id)) {
                $sql .= "WHERE category_name LIKE '%".$search."%'";
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
                      <td><?= highlight($search, $data['category_name']); ?></td>
                      <td>
                        <a href='?editCategory&id=<?= $data['category_id'] ?>' class='btn btn-xs btn-success'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                        <a href='?deleteCategory&id=<?= $data['category_id'] ?>' class='btn btn-xs btn-danger'><i class='glyphicon glyphicon-trash'></i> Delete</a>
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