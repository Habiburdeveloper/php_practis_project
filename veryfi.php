<?php
require('config.php'); // database connectin kora holo.

$code = $_POST['code'];

$sql_update = "UPDATE user SET status='DONE' WHERE code=$code";   // mysql update......
$sql = mysqli_query($conn,$sql_update); // query insert data
if ($sql == true ){
    header('location: login_page.php?msg=Success');
}
else{
    header('location: userconfrim.php?msg=invalid code');
}

?>