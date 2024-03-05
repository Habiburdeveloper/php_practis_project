<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$disegnetion = $_POST['disegnetion'];
$description = $_POST['description'];
// connect db............
$dbconn = mysqli_connect("localhost", "root", "", "myphp");
if( $dbconn == true ){
    $query = "INSERT INTO userlist (first_name, last_name, userphone, user_disegnetion, _description)
    VALUES ('$first_name', '$last_name', '$phone', '$disegnetion', '$description')";
    // check insert
    // var_dump($query);
    $sql = mysqli_query($dbconn , $query); // db query....
    if( $sql ){
        // echo 'Done';
        header('location: userlist.php?msg=Success');
    }
    else{
        // echo 'Sorry';
        header('location: userlist.php?msg=Invalid');
    }
    
}
else{
    echo 'invalid db';
}

?>