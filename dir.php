<?php
    $file_path = 'photo/all-photo/test.jpg';
    // $file_extention = explode('.',$file_path);
    // $file_type = $file_extention[1];
    // // print_r($file_type);
    // // exit();
    // $base_name = basename($file_path, $file_type);
    // echo $base_name;
    // $dir = dirname($file_path,2);
    // echo $dir;
    // $dirname = dirname($file_path);
    // if(is_dir($dirname)){
    //     echo dirname($file_path,3);
    // }
    // else{
    //     echo 'dir nai';
    // }

    // copy

    if(copy($file_path,"habib.php")){
        echo 'file create done';
    }
    else{
        echo 'file not ceate';
    }

?>