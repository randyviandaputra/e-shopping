<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../public/assets/css/frontend/login.css">
    <link rel="stylesheet" href="../public/assets/css/bootstrap.min.css">
  </head>
  <body>
    <!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="act_login.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
            <?php
              if (isset($_GET['gagal'])) {
                echo "<div class='alert alert-danger'>Login gagal !!</div>";
              }
            ?>
        </div><!-- /card-container -->
    </div><!-- /container -->
  <script type="text/javascript" src="../public/assets/js/jquery.js"></script>
  <script type="text/javascript" src="../public/assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../public/assets/js/login.js"></script>
  </body>
</html>
