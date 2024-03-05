<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Ragistration</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">

    <label for="username">Username</label>
    <input type="text" name="name" id="">



    <button type="submit" value="save">Save</button>
    </form>
    <?php
    if( $_SERVER['REQUEST_METHOD']  ==  'POST' ){
        $username =  $_REQUEST['name'];
        
        // if( empty($username ) ){
        //     echo 'empty field';
        // }
        // else{
        //     echo $username;
        // }
        if( !empty($username) ){
            echo $username;
        }
        else{
            echo 'empty field';
        }
    }
    else{
        echo 'system mehod post';
    }
    
    
    
    
    ?>
</body>
</html>