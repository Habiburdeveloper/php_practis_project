<?php


// php class declier.
// class Habib{
// // public, private,protected.
// public $name = 'habib'; // property declear.

//     function Setinfo($name){
//         echo $name. '</br>';
//     }

//     function Getinfo(){
//         return "age 23". '</br>';
//     }
// }

// $newObject = new Habib(); // object declear.
// echo $newObject -> Setinfo('Md Habibur Rahamn');
// echo $newObject -> Getinfo();
// echo $newObject -> name;

// class Php{
//     public $name = 'Md Habibur Rahamn';
//     public $age;
//     public $village = 'Moniary';

//     function Setage($age){
//        return 'Age: '.$this -> age = $age. '</br>';
//     }
//     function Getname(){
//         return 'Name: '.$this->name. '</br>';
//     }
// }
// $_2nd_object = new Php();
// echo  $_2nd_object -> Setage(23);
// echo $_2nd_object -> Getname();
// echo $_2nd_object -> village;

class Product_calculation{
    public $price;
    public $qty;

    function Set_price($qty,$price){
        $this -> qty = $qty;
        $this -> price = $price;
    }
    function Getpricecal(){
        $total_price = $this -> qty * $this -> price;
        return $total_price;
    }
}
// $product_pricecal = new Product_calculation();
// $product_pricecal -> Set_price(3,100);
// echo $product_pricecal -> Getpricecal();









?>