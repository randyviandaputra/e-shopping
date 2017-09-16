<?php
    include "../config/connection.php";
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];
    $product_inStock = $_POST['product_inStock'];
    $category_id = $_POST['category_id'];
    $product_publish = date('Y-m-d H:i:s');
    if($_POST['addProduct']){
        $file_name = $_FILES['product_image']['name'];
        $file_size = $_FILES['product_image']['size'];
        $file_tmp = $_FILES['product_image']['tmp_name'];
        // dump($file_tmp);exit;
        $has_extension = array('png','jpg', 'jpeg');
        $get_extension = explode('.', $file_name);
        $extension = strtolower(end($get_extension));
        if (in_array($extension, $has_extension) === true) {
            if ($file_size < 5044070) {
                move_uploaded_file($file_tmp, '../public/uploads/'.$file_name);
                $sql = "
                    INSERT INTO products 
                    (product_name, product_description, product_price, product_image, product_inStock, category_id, product_publish)
                    VALUES ('$product_name', '".$product_description."', '$product_price', '$file_name', '$product_inStock', '$category_id', '$product_publish')
                ";
                $query = mysql_query($sql);
                if ($query) {
                    header('location:?product&addProductSuccess');
                } else {
                    header('location:?product&addProductFail');
                }
            } else {
                header('location:?product&addProductTooLarge');
            }
        } else {
            header('location:?product&addProductExtension');
        }
    }