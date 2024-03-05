<?php

//1 50>=2%,100>=10%, 200>= 20%, 300>= 25%. product Discount
//2 3==1ta, 5==2ta product buy free
//3 15>= non-voter, 16>=non-voter 18>= voter
//4 ragistration, login page, username+password, dashbord
//5 boyos age ==1-12 siso, age==12-25 jobok, age >= 60 britdho
//6 50 == 3.50tk, 100== 4tk, 100== 5.20 tk, 250 == 6.50tk

$product_price = 200;
$product_item = 3;
$age = 18;
$ragistration = 1;
$login_page = 2;
$username = 'true';
$password = 'true';
$_age = '1-12';
$unit = 20;

// if($unit >=200){
//     $unit
// }

//switch=====

switch(true){
    case ($_age ==50):
        echo 'se britdo';
        break;
    case ($_age <='1-12'):
        echo 'se siso';
        break;
    default:
        echo 'system error';
}
// switch($_age){
//     case '50':
//         echo 'se britdo';
//         break;
//     case '1-12':
//         echo 'se siso';
//         break;
//     default:
//         echo 'system error';
// }

// switch(true){
//     case null:
//         echo 'one';
//         break;
//     case 2:
//         echo 'two';
//         break;
//     case 3:
//         echo 'three';
//         break;
//     default:
//         echo 'hello php';
// }

//5 boyos age ==1-12 siso, age==12-25 jobok, age >= 60 britdho
// if($_age >= 60){
//     echo 'se britdho';
// }
// elseif($_age <= '1-12'){
//     echo 'se siso';
// }
// elseif($_age == '12-25'){
//     echo 'se jobok';
// }
// else{
//     echo 'system error';
// }


//4 ragistration, login page, username+password, dashbord
// if($ragistration== 1){
//     header('location:login_page.php');
// }
// elseif($username == 'true' && $password == 'true'){
//     header('location:dashbord.php');
// }
// else{
//     header('location:home.php');
// }


// voter======
// if($age ==19){
//     echo 'tomi voter';
// }
// elseif($age == 18){
//     echo 'tomi voter';
// }
// elseif($age ==15){
//     echo 'tomi voter';
// }
// else{
//     echo 'tomi voter now';
// }

//product buy free =====
// if($product_item ==5){
//     $total_item = $product_item+2;
//     $free_item = $total_item -$product_item;
//     echo 'product iteam '. $product_item.'ti'.'</br>';
//     echo 'free '.$free_item.'</br>';
//     echo "Total iteam ".$total_item.'ti';
// }
// elseif($product_item ==3){
//     $total_item = $product_item+1;
//     $free_item = $total_item -$product_item;
//     echo 'product iteam '. $product_item.'ti'.'</br>';
//     echo 'free '.$free_item.'</br>';
//     echo "Total iteam ".$total_item.'ti';
// }
// else{
//     echo 'defult product '.$product_item.'ti';
// }

//product Discount=========
// if($product_price >=300){
//     $discount = $product_price*25/100;
//     $total_price = $product_price -$discount.'</br>';
//     echo 'product-price'. $product_price.'tk'.'</br>';
//     echo 'discount '. $discount.'tk'.'</br>';
//     echo 'Total price '. $total_price.'tk';
// }
// elseif($product_price >=200){
//     $discount = $product_price*20/100;
//     $total_price = $product_price -$discount.'</br>';
//     echo 'product-price'. $product_price.'tk'.'</br>';
//     echo 'discount '. $discount.'tk'.'</br>';
//     echo 'Total price '. $total_price.'tk';
// }
// elseif($product_price>=100){
//     $discount = $product_price*10/100;
//     $total_price = $product_price -$discount.'</br>';
//     echo 'product-price'. $product_price.'tk'.'</br>';
//     echo 'discount '. $discount.'tk'.'</br>';
//     echo 'Total price '. $total_price.'tk';
// }
// elseif($product_price >=50){
//     $discount = $product_price*6/100;
//     $total_price = $product_price -$discount.'</br>';
//     echo 'product-price'. $product_price.'tk'.'</br>';
//     echo 'discount '. $discount.'tk'.'</br>';
//     echo 'Total price '. $total_price.'tk';

// }

// else{
//     echo 'defult dam '. $product_price.'tk';
// }













?>