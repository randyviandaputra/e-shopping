<!-- navbar -->
<?php session_start(); ?>
<nav class="navbar navbar-custom navbar-fixed-top">
  <div class="container-fluid">
	<div class="navbar-header">
    <a class="navbar-brand" href="#" >Dashboard</a>
	</div>
    <div class="collapse navbar-collapse">
	    <ul class="nav navbar-nav navbar-right">
        <li><a href="?"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="?product"><span class="glyphicon glyphicon-shopping-cart"></span> Products</a></li>
            <li><a href="?categories"><span class="glyphicon glyphicon-tasks"></span> Categories</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <?= $_SESSION['fullname'] ?> <span class="caret"></span>
          </a>
	        <ul class="dropdown-menu">
	            <li><a href="#">Logout</a></li>
	        </ul>
        </li>
      </ul>
    </div>
	</div>
</nav>
<br><br>
<br>
<br>
