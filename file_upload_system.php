<?php

function fileUploade($file,$jpg,$png,$size,$mp4){
  
    // file ....
    $categorie_image = $file["name"];
    $file_extention = explode('.', $categorie_image);
    $file_type = $file_extention[1];
    $file_size = $file['size'];
    $size = explode('.', $file_size);
    $size_type = $size[0];
    // print_r($size);
    // exit();
    // print_r($file_extention);
    if( $file_type == $jpg || $file_type == $png || $file_type == $mp4 ){

        $tem_name = $file['tmp_name'];
        $file_destination = 'upload_file/'. $categorie_image;
        move_uploaded_file($tem_name, $file_destination); /// folder a file updload hobe...
        return 'file upload';
        

        // if( $size_type < $size ){

        //     $tem_name = $file['tmp_name'];
        //     $file_destination = 'upload_file/'. $categorie_image;
        //     move_uploaded_file($tem_name, $file_destination); /// folder a file updload hobe...
        //     return 'file upload';
        // }
        // else{
        //     return 'Dose not match file';
        // }
    }
    else{
        return 'Dose not match file';
    }

// echo "</br>". $image;
// echo "</br>". $tem_name;
// echo "</br>". $file_size;
// exit();
}






?>