<?php
require('config.php');
$categorie_name = $_POST['cat_name'];
$categorie_code = $_POST['cat_code'];
$categorie_image = $_FILES['cat_image']['name'];
$tmp_name = $_FILES['cat_image']['tmp_name'];
$file_desetination = "upload_file/.$categorie_image";
move_uploaded_file($tmp_name, $file_desetination);
$location = 'categorieform.php?msg=success';
 // insert ekta variabler vitore rakha holo.
$query ="INSERT INTO categorielist (categorie_name, categorie_code, categorie_image)
        VALUES ('$categorie_name', '$categorie_code', '$file_desetination')";

$dbOparetion = new dbOparetion();
$dbOparetion -> insertDB($conn, $query, $location);












?>