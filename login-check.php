<?php
session_start();
//file include kora holo .....
require('config.php');

$username =$_POST['email'];
$passwrod =$_POST['password'];

$query = "SELECT * from user
WHERE email = '$username' && password = '$passwrod' && status='DONE' ";
// database query........
if( $conn == true ){
    // query.....
    $sql = mysqli_query($conn, $query); 
    // var_dump($sql);
    if(mysqli_num_rows($sql)>0){        // check 1 mehtod........
        $object_assoc = mysqli_fetch_assoc($sql);   // check 2 mehtod............
        // echo $object_assoc['name'].'</br>';
        // echo $object_assoc['email'].'</br>';
        // echo $object_assoc['password'];
        // exit();
        header('location:dashbord.php?msg=Success');
        
        if( $object_assoc['email'] == $username && $object_assoc['password'] == $passwrod ){

            $_SESSION['email']="$username";
            header('location:dashbord.php?msg=Success');
        }
        else{
            header('location:login_page.php?msg=invalid');
        }
    }
    else{
        header('location:login_page.php?msg=invalid');
    }
}
else{
    echo 'db ivalid';
}



?>