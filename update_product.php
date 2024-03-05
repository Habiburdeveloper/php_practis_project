<?php

require('config.php');
$cat_id = $_GET['cat_id'];
$product_name = $_GET['product_name'];
$buy_price = $_GET['buy_price'];
$id = $_GET['id'];
$location = 'Product.php?msg= Done';
$update = "UPDATE product 
SET cat_id = '$cat_id',
product_name = '$product_name',
buy_price = '$buy_price'
WHERE id= $id";
// object call...
$dboparetion = new dbOparetion();
$dboparetion -> uQuery($conn, $update, $location);


?>