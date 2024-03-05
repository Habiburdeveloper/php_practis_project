<?php
    $name = 'user';
    $value = 'Md Habibur rahamn';
    setcookie($name,$value, time() + (3600), '/');
    if(isset($_COOKIE[$name])){
        echo "Cookie name: $_COOKIE[$name]";
    }
    else{
        echo "Cookie not found";
    }
    




?>