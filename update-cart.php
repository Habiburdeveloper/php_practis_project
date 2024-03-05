<?php
session_start();
$qty = $_POST['qty'];
$productId = $_POST['productId'];
$_SESSION['cart'][$productId]['qty'] = $qty;
header('location:cart.php?msg= Cart Update Done');














?>