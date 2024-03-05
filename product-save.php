<?php
$cat_name = $_POST['cat-name'];
$product_name = $_POST['product_name'];
$price_sell = $_POST['price_sell'];
$buy_price = $_POST['buy_price'];
$description = $_POST['description'];

$dbconn = mysqli_connect('localhost', 'root', '', 'myphp');  /// database connect.

if($dbconn == true ){
    $query = "INSERT INTO product(cat_id, product_name, buy_price, 	sell_price, description)
    VALUES ('$cat_name', '$product_name', '$price_sell', '$buy_price', '$description')";
    // insert check
    // var_dump($query);
    $sql = mysqli_query($dbconn, $query);

    if($sql){
        // echo 'Done';
        header('location: Product.php?msg=Success');
    }
    else{
        header('location: Product.php?msg=invalid');
    }
}
else{
    echo 'not valid database';
}















?>