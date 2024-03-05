<?php

require('config.php');
$cat_name = $_GET['categorie_name'];
$cat_code = $_GET['categorie_code'];
$categorie_image = $_FILES['categorie_image']['name'];
$tmp_name = $_FILES['categorie_image']['tmp_name'];
$file_desetination = "upload_file/.$categorie_image";
move_uploaded_file($tmp_name, $file_desetination);
$id = $_GET['id'];
$location = 'categorieform.php?msg= Done';
$update = "UPDATE categorielist 
           SET categorie_name = '$cat_name',
               categorie_code = '$cat_code',
               categorie_image = '$categorie_image'
           WHERE id=$id";

$dboparetion = new dbOparetion();
$dboparetion -> uQuery($conn, $update, $location);



?>