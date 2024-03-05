<?php
//array_change_key_case

$case_change = Array(
    'name' => 'habib',
    'one' => 1
);
echo '<pre>';
print_r (array_change_key_case($case_change, CASE_UPPER));
echo '</pre>';

//array_chunk

$chunk = array(
    'a',
    'b',
    'c',
    'd'
);

echo '<pre>';
print_r(array_chunk($chunk, 3,true));
echo '</pre>';

//array_column

$person_infos = array(
    array(
        'id' => '101012',
        'fast_name' => 'Habibur',
        'last_name' => 'Rahman',
    ),
);
echo '<pre>';
print_r(array_column($person_infos, 'id', 'fast_name',));
echo '</pre>';


// array_combine

$a = array('red','red', 'black','yellow','green'); // double value thakle porer ta pradanno pabe
$b = array('blu','pink','assh','holod','lal');
echo '<pre>';
print_r(array_combine($a,$b));
echo '</pre>';

//array_count_values

$a = array('red','red', 'black','yellow','green');
echo '<pre>';
print_r(array_count_values($a));
echo '</pre>';

//array_diff_assoc
$array1 = array(
    "a" => "green",
    "b" => "brown",
    "c" => "blue",
    'd' =>  "red",
);

$array2 = array(
    "a" => "green",
    'b' => 'brown',
    'c' => 'red',
    'd' => 'brown',
);

$result = array_diff_assoc($array1, $array2);
echo '<pre>';
print_r($result);
echo '</pre>';

//array_diff_key
// $array1 = array(
//     "a" => "green",
//     "b" => "brown",
//     "c" => "blue",
//     'd' =>  "red",
// );

// $array2 = array(
//     "a" => "green",
//     'z' => 'ek',
//     'c' => 'red',
//     'd' => 'brown',
// );

// $result = array_diff_key($array1, $array2);
// echo '<pre>';
// print_r($result);
// echo '</pre>';


//array_diff

// $name = array(
//     "habib",
//     "munni",
//     "hamim",
//     "momin",
// );
// $name2 = array(
//     "habib",
//     "bulbul",
//     "mamon",
//     "hafiz",
// );

// echo "<pre>";
// print_r(array_diff($name,$name2));
// echo "</pre>";

//array_intersect

// $name = array(
//     "habib",
//     "munni",
//     "hamim",
//     "momin",
// );
// $name2 = array(
//     "habib",
//     "bulbul",
//     "mamon",
//     "hafiz",
// );

// echo "<pre>";
// print_r(array_intersect($name,$name2));
// echo "</pre>";

//array_intersect_assoc

// $name = array(
//     "name1" => "habib",
//     "name2" => "munni",
//     "name3" => "hamim",
//     "name4" => "momin",
// );
// $name2 = array(
//     "name1" => "habib",
//     "name2" => "bulbul",
//     "name3" => "hamim",
//     "name4" => "hafiz",
// );

// echo "<pre>";
// print_r(array_intersect_assoc($name,$name2));
// echo "</pre>";

//array_intersect_key

// $name = array(
//     "name0" => "habijabi",
//     "name1" => "habib",
//     "name2" => "munni",
//     "name3" => "hamim",
//     "name4" => "momin",
// );
// $name2 = array(
//     "name" => "habijabi",
//     "name1" => "habib",
//     "name2" => "bulbul",
//     "name3" => "hamim",
//     "name" => "hafiz",
// );

// echo "<pre>";
// print_r(array_intersect_key($name,$name2));
// echo "</pre>";


//array_key_exists

// $name = array(
//     "name0" => "habijabi",
//     "name1" => "habib",
//     "name2" => "munni",
//     "name3" => "hamim",
//     "name4" => "momin",
// );
// $name2 = array(
//     "name" => "habijabi",
//     "name1" => "habib",
//     "name2" => "bulbul",
//     "name3" => "hamim",
//     "name" => "hafiz",
// );

// echo "<pre>";
// if(array_key_exists("name0", $name)){
//     echo $name["name0"];
// }
// else{
//     echo "Not fount";
// }
// echo "</pre>";


//array_keys

// $name = array(
//     "name0" => "habijabi",
//     "name1" => "habib",
//     "name2" => "munni",
//     "name3" => "hamim",
//     "name4" => "momin",
// );
// $name2 = array(
//     "name" => "habijabi",
//     "name1" => "habib",
//     "name2" => "bulbul",
//     "name3" => "hamim",
//     "name" => "hafiz",
// );

// echo "<pre>";
// print_r(array_keys($name,"hamim"));
// echo "</pre>";


//array_map

function map($student_name){
        $student = strtoupper($student_name);
        return $student;
}

function mapMultiplication($a){
    $multiplication = $a*$a;
    return $multiplication;
}

$name = array(
    "name0" => "habijabi",
    "name1" => "habib",
    "name2" => "munni",
    "name3" => "hamim",
    "name4" => "momin",
);
$name2 = array(
    0,1,2,3,4
);

echo "<pre>";
print_r(array_map("map",$name,$name2));
echo "</pre>";

echo "<pre>";
print_r(array_map("map", $name));
echo "</pre>";

// array_merge

// $name = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name3" => "hamim",
//     // "name4" => "momin",
//     'ab',
//     'bc',
//     'cd'
// );
// $name2 = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name_3" => "hamim",
//     // "name5" => "momi",
//     'ab',
//     'dc',
//     'ba'
// );

// echo "<pre>";
// print_r(array_merge($name,$name2));
// echo "</pre>";

// // array_multisort

// $name = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name3" => "hamim",
//     // "name4" => "momin",
//     'ab',
//     'bc',
//     'cd'
// );
// $name2 = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name_3" => "hamim",
//     // "name5" => "momi",
//     'ab',
//     'dc',
//     'ba'
// );

// echo "<pre>";
// print_r(array_multisort($name2, SORT_STRING));
// echo "</pre>";

// // array_pad

// $name = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name3" => "hamim",
//     // "name4" => "momin",
//     'ab',
//     'bc',
//     'cd'
// );
// $name2 = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name_3" => "hamim",
//     // "name5" => "momi",
//     'ab',
//     'dc',
//     'ba'
// );

// echo "<pre>";
// print_r(array_pad($name2, -5, 'ab'));
// echo "</pre>";

// // array_push

// $name = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name3" => "hamim",
//     // "name4" => "momin",
//     'ab',
//     'bc',
//     'cd'
// );
// $name2 = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name_3" => "hamim",
//     // "name5" => "momi",
//     'ab',
//     'dc',
//     'ba'
// );

// array_push($name2, 'dc');

// echo "<pre>";
// print_r($name2);
// echo "</pre>";

// //array_pop

// $name = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name3" => "hamim",
//     // "name4" => "momin",
//     'ab',
//     'bc',
//     'cd'
// );
// $name2 = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name_3" => "hamim",
//     // "name5" => "momi",
//     'ab',
//     'dc',
//     'ba'
// );

// array_pop($name);

// echo "<pre>";
// print_r($name);
// echo "</pre>";


// //array_shift

// $name = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name3" => "hamim",
//     // "name4" => "momin",
//     'ab',
//     'bc',
//     'cd'
// );
// $name2 = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name_3" => "hamim",
//     // "name5" => "momi",
//     'ab',
//     'dc',
//     'ba'
// );

// array_shift($name);

// echo "<pre>";
// print_r($name);
// echo "</pre>";

// //array_unshift

// $name = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name3" => "hamim",
//     // "name4" => "momin",
//     'ab',
//     'bc',
//     'cd'
// );
// $name2 = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name_3" => "hamim",
//     // "name5" => "momi",
//     'ab',
//     'dc',
//     'ba'
// );

// array_unshift($name, 01,10);

// echo "<pre>";
// print_r($name);
// echo "</pre>";

// //array_product

// $name = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name3" => "hamim",
//     // "name4" => "momin",
//     // 'ab',
//     // 'bc',
//     // 'cd'
//     2,
//     2,
//     2
// );
// $name2 = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name_3" => "hamim",
//     // "name5" => "momi",
//     'ab',
//     'dc',
//     'ba'
// );

// $habib = array_product($name);

// echo "<pre>";
// print_r($habib);
// echo "</pre>";

// //array_reverse

// $name = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name3" => "hamim",
//     // "name4" => "momin",
//     // 'ab',
//     // 'bc',
//     // 'cd'
//     2,
//     2,
//     2
// );
// $name2 = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name_3" => "hamim",
//     // "name5" => "momi",
//     'ab',
//     'dc',
//     'ba'
// );

// $habib = array_reverse($name2);

// echo "<pre>";
// print_r($habib);
// echo "</pre>";

// //array_replace

// $name = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name3" => "hamim",
//     // "name4" => "momin",
//     10,
//     12,
//     16
//     // 2,
//     // 2,
//     // 2
// );
// $name2 = array(
//     // "name0" => "habijabi",
//     // "name1" => "habib",
//     // "name2" => "munni",
//     // "name_3" => "hamim",
//     // "name5" => "momi",
//     10,12,11
// );

// $habib = array_replace($name, $name2);

// echo "<pre>";
// print_r($habib);
// echo "</pre>";

//array_slice

$name = array(
    // "name0" => "habijabi",
    // "name1" => "habib",
    // "name2" => "munni",
    // "name3" => "hamim",
    // "name4" => "momin",
    10,
    12,
    16
    // 2,
    // 2,
    // 2
);
$name2 = array(
    // "name0" => "habijabi",
    // "name1" => "habib",
    // "name2" => "munni",
    // "name_3" => "hamim",
    // "name5" => "momi",
    10,12,11
);

$habib = array_slice($name, 1,1,true);

echo "<pre>";
print_r($habib);
echo "</pre>";

?>