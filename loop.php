<?php
//
// for()
// foreach()
// while()

// for($post=0; $post<=3; $post+=1){
//     echo $post. "</br>";
// }

// dhowrabe 200 miter,poti dhore 100 kore point berbe

// for($run=0; $run<=500; $run+=100){
//     echo $run. '</br>';
// }

// // // lebour koto ber aslo abong gelo
// for($labour=0; $labour<=20; $labour++){
//     echo $labour. '</br>';
// }

// for($taka=500; $taka>50; $taka-=20){
//     echo $taka."</br>";
// }
// $serial_number=0;
// $sum=0;
// for($taka=0; $taka<=500; $taka+=50){
//     echo $taka.'</br>';
//     $serial_number++;
//     $sum+=$taka;
// }

// echo $serial_number++.'</br>';
// echo $sum;

// while

// $serial_number=0;
// $sum=0;

// $taka=0;
// while($taka<=500){
//     echo $taka.'</br>';
//     $serial_number++;
//     $sum+=$taka;

// $taka+=50;
// }

// echo $serial_number++.'</br>';
// echo $sum;



// foreach
// $name2 = array(
//     "name0" => "habijabi",
//     "name1" => "habib",
//     "name2" => "munni",
//     "name_3" => "hamim",
//     "name5" => "momi",
//     10,12,11
// );


// foreach($name2 as $single_name){
//     echo $single_name."</br>";
// }

// do while loop ...
// $count = 1;
// do{
//    if ( $count != 6 ) {
//     echo $count.'</br>';
//    }
   
    
// $count++;
// } while ( $count <= 10 );

for ( $count =1; $count <= 4; $count++ ) {
    echo "php".'<br>';
    echo "css".'<br>';
    if ( $count == 3 ) {
        continue;
    }
    echo "oop".'<br><br>';

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     for ( $i=0; $i<=4; $i++ ) {  
          if ( $i ==3 ) {
            goto end;
          }
    ?>
    
    <ul>
        <li>hello
           
            <ul>
           
                <li>list1</li>
                
            </ul> 
            
        </li>
    
    </ul>
    <?php
    }
    end:
    echo 'ok';
    ?>

</body>
</html>