<?php


require('config.php');
$cat_name = $_POST['cat-name'];
$product_name = $_POST['product_name'];
$price_sell = $_POST['price_sell'];
$buy_price = $_POST['buy_price'];
$description = $_POST['description'];
$productImage = $_FILES['product_image']['name'];
$tmp_name = $_FILES['product_image']['tmp_name'];
$destenition = "upload_file/".$productImage;
move_uploaded_file($tmp_name,$destenition);
$location = 'Product.php?msg=Success';
$query = "INSERT INTO product(cat_id, product_name, buy_price, 	sell_price, description,        product_iamge)
VALUES ('$cat_name', '$product_name', '$price_sell', '$buy_price', '$description','$destenition')";

$dbOparetion = new dbOparetion();
$dbOparetion -> insertDB($conn, $query, $location);


// "SELECT user.name, user.email, user.password, user.code, user.status, userlist.userphone, userlist.user_disegnetion FROM user 
// JOIN userlist 
// ON user.id=userlist.id"








?>