<?php
    require('config.php');
    

    $genarete_code = rand(8,1000);
    if(isset($_POST['create_account'])){
        $create_account  = $_POST['create_account'];
        if($create_account == 'yes'){
            $password = md5($genarete_code);
        }
    }
    else{
        echo 'Not Found';
    }

    

    // if(isset($_POST['payment'])){
    //     $payment = $_POST['payment'];

    //     if($payment == 'ssl'){

           
            
    //     }
    // }

    // else{
    //     echo 'Not Found';
    // }


    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['userphone'];
    $email = $_POST['email'];
    $address_1 = $_POST['address_line_1'];
    $address_2 = $_POST['address_line_2'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $payment = $_POST['payment'];
    $location = 'payment-method.php';
    $query = "INSERT INTO userlist (first_name, last_name, userphone, email, password, address_line_1, address_line_2, country, city, state, zip_code,status)
    VALUES ('$first_name', '$last_name', '$phone', '$email', '$password', '$address_1', '$address_2', '$country', '$city', '$state', '$zip_code', '$payment')";
    $dbOparetion = new dbOparetion();
    $dbOparetion -> insertDB($conn, $query, $location);

    


    

    
        



?>