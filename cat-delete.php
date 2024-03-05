<?php

require('config.php');
$id = $_GET['id'];
$location = 'categorieform.php?msg= delete done';
$delateQuery ="DELETE FROM categorielist WHERE id= $id";
$dboparetion = new dbOparetion();
$dboparetion -> delateQuery($conn, $delateQuery, $location);


?>