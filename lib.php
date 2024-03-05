<?php
// ek file theke r ek file jokto korer jonno ei function golo beboher kora hoy .
// include();
// include_once();
// require();
// require_once()


function aboutUs(){
    return "Habibur Rahman"."</br>";
}

function mobileNumber(){
   return "01318978653". '</br>';
}

function priceCal($qty,$price){
    $product_qty = $qty;
    $product_price = $price;
    $_Total_price = $product_price*$product_qty;
   
    // if($_Total_price == 500){
    //     echo 'qty '.$product_qty. '</br>';
    //     echo ' product_price'.$product_price. '</br>';
    //     echo 'product total price '.$_Total_price. '</br>';
    //     $discount = $_Total_price - 20;
    //     echo "discunt 20tk". '</br>';
    // }
    // else{
    //     echo $_Total_price;
    // }

    return 'Total price '.$_Total_price;
}





























?>