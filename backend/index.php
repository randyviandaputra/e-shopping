<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Dashboard - Super Admin</title>
      <link rel="stylesheet" href="../public/assets/css/backend/style.css">
      <link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
  </head>
  <body>
      <div class="row">
          <?php include "components/menu.php"; ?>

          <?php
            // Product
            if (isset($_GET['product'])) {
              include "modules/product/list.php";
            } elseif (isset($_GET['addProduct'])) {
              include "modules/product/add.php";
            } elseif (isset($_GET['saveProduct'])) {
              include "modules/product/save.php";
            } elseif (isset($_GET['editProduct'])) {
              include "modules/product/edit.php";
            } elseif (isset($_GET['editedProduct'])) {
              include "modules/product/edited.php";
            } elseif (isset($_GET['deleteProduct'])) {
              include "modules/product/delete.php"; 
            // Categories
            } elseif (isset($_GET['categories'])) {
              include "modules/categories/list.php";
            } elseif (isset($_GET['addCategory'])) {
              include "modules/categories/add.php";
            } elseif (isset($_GET['saveCategory'])) {
              include "modules/categories/save.php";
            } elseif (isset($_GET['editCategory'])) {
              include "modules/categories/edit.php";
            } elseif (isset($_GET['editedCategory'])) {
              include "modules/categories/edited.php";
            } elseif (isset($_GET['deleteCategory'])) {
              include "modules/categories/delete.php";
            }
            else {
              include "components/content.php";
            }
          ?>
      </div>
  <script type="text/javascript" src="../public/assets/js/jquery.js"></script>
  <script type="text/javascript" src="../public/assets/js/bootstrap.min.js"></script>
  </body>
</html>
