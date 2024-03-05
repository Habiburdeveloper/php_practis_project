<?php

require('config.php');
$id = $_GET['id'];
$delateQuery =  "DELETE FROM  userlist WHERE id=$id";
$location = 'userlist.php?msg= delete Successful';
$dbOparetion = new dbOparetion(); // class instant/object...
$dbOparetion -> delateQuery($conn, $delateQuery, $location); // method call.....



?>