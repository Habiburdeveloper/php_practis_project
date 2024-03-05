<?php

require('config.php');
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$id = $_GET['id'];
$location = 'userlist.php?msg= Done';
$update = "UPDATE userlist 
SET first_name = '$first_name',
    last_name = '$last_name'
WHERE id= $id";

$dboparetion = new dbOparetion();
$dboparetion -> uQuery($conn, $update, $location);


?>