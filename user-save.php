<?php

require('config.php');
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$disegnetion = $_POST['disegnetion'];
$description = $_POST['description'];
$location = 'userlist.php?msg=Success';
$query = "INSERT INTO userlist (first_name, last_name, userphone, user_disegnetion, _description)
VALUES ('$first_name', '$last_name', '$phone', '$disegnetion', '$description')";
$dbOparetion = new dbOparetion();
$dbOparetion -> insertDB($conn, $query, $location);

?>