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
            if (isset($_GET['index'])) {
              // include "";
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
