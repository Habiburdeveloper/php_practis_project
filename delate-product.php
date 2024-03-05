<?php

require('config.php');
$id = $_GET['id'];
$delateQuery =  "DELETE FROM  product WHERE id=$id";
$location = 'Product.php?msg= delete Successful';
$dbOparetion = new dbOparetion(); // class instant/object...
$dbOparetion -> delateQuery($conn, $delateQuery, $location); // method call.....



?>