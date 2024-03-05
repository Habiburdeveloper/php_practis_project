<?php
    $file_path = 'info.txt';
    $myuser = file($file_path);
    // print_r($myuser);
    $lenth = count($myuser);
    // echo $lenth;
    for($i=0; $i<$lenth; $i++){
        echo $myuser[$i].'</br>';
    }


?>