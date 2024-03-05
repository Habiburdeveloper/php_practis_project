<?php
require('file_upload_system.php');
echo fileUploade($_FILES['photo'],"jpg","png",1000000,"mp4");
// var_dump($_FILES['image']);
$categorie_name = $_POST['categoriename'];
$categorie_code = $_POST['categoriecode'];
$dbconn = mysqli_connect("localhost", "root", "", "myphp");

if($dbconn == true){
    // insert ekta variabler vitore rakha holo.
    $query="INSERT INTO categorielist (categorie_name, categorie_code, categorie_image)
    VALUES ('$categorie_name', '$categorie_code', '$categorie_image')";
    // var_dump($query);
    // exit();
    // insert query
   $sql=mysqli_query($dbconn,$query);

    if($sql){
        // echo 'done';
        header('location: categorieform.php?msg=success');
    }
    else{
        echo 'sorry';
        // header('location: categorieform.php?msg=invalid');
    }
}

else{
    echo 'invalid db';
}












?>