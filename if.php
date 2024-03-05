<?php

//1 Vat Ranna Hole khabo,, na Hole Khabo Na
//2 samne bosor jodi soti dey tahole bari jabo,, na dile jabo na
//3 boyos jodi 18 ba 18or opor hoy tahole tumi voter,, na hole voter noy
//4 amer Sallery jodi 1100 riyal theke 1200 riyal hoy tahole ami khusi,, na hole bejhar
//5 sokrobare jodi 100 tk thake tahole ami uter gosto kinbo, na thakle kinbo na
//6 kaj valo kore shikle tomi good boy, valo kaj na janle kew nibe na
//7 500 tkr jionis kinle 20% discount deya hobe
//8 5ta kinle ekta free, 1ta kinle free nay
//9 jodi tomer mon amake daw tahole valobasha pabe, mon na dile grina pabe
//10  jodi username= admin, passwrod=1234 true hole dashbord na hole login page niye jaw





$vat_khabo = 'Vat khabo na';
$soti = 'bari jabo';
$age = 18;
$sallery = 1300;
$gosto = '80tk';
$kaj = 'valo kaj jante hobe';
$product_price = 500;
$product_item = 5;
$valobhasa_daw = 'mon pabe';
$username = 'habib';
$passwrod = 123;

// if ($vat_khabo == 'Vat khabo'){
//     echo 'Vat Khabo';
// }
// else{
//     echo 'khabo na';
// }

// 2nd
// if($soti == 'bari jabo'){
//     echo 'onek anonde bari jassi';
// }
// else{
//     echo 'soti dilo na';
// }

// 3rd
// if($age >=18){
//     echo 'tomi voter';
// }
// else{
//     echo 'tomi voter now';
// }

//  4th
// if($sallery =1100 && $sallery >=1300){
//     echo 'tahole ami kushi';
// }
// else{
//     echo  'beton bare nay, amer mon valo na';
// }

//5th
// if($gosto =='100tk' || $gosto <='90tk'){
//     echo 'gosto kinbo';
// }
// else{
//     echo 'kinbo na';
// }

//6
// if($kaj =='valo kaj jante hobe'){
//     echo 'valo kaj,, good boy';
// }
// else{
//     echo 'valo kaj jene na';
// }

//7
// if($product_price ==600){
//     $discount = $product_price*20/100;
//     $total_dam = $product_price -$discount;
//     echo 'ager dam '.$product_price."</br>";
//     echo 'Discount '.$discount."</br>";
//     echo 'Totall Dam '.$total_dam;

// }
// else{
//     echo 'Toall dam '. $product_price.'tk';
// }

//8
// if($product_item >=5){
//    $total_item = $product_item +1;
//    echo 'after iteam '.$product_item."</br>";
//     echo 'free and total iteam '. $total_item;
// }
// else{
//     echo 'free nay';
// }

//9
// if($valobhasa_daw =='mon pabe'){
//     echo 'mon pabe';
// }
// else{
//     echo 'grina pabe';
// }

//10
if($username =='habib' && $passwrod ==1234){
    header('location:dashbord.php');
}
else{
    header('location:login_page.php');
}

?>