<?php 
    include '../config/connection.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

    $query = mysql_query($sql);
    $get_data = mysql_fetch_assoc($query);
    $sum_data = mysql_num_rows($query);

    if ($sum_data ==1) {
        session_start();
        $_SESSION['fullname'] = $get_data['fullname'];

        header('location:index.php');
    } else {
        header('location:login.php?gagal');
    }


?>