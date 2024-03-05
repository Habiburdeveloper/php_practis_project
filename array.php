<?php
// indexing array
$person_datails = array(
                'Habibur Rahaman',
                '01318978653',
                "rmdhabibur621@gmail.com",
                'Naogaon',
                'Rajshahi',
);

echo $person_datails['0']."</br>";
echo $person_datails['1']."</br>";
echo $person_datails['2']."</br>";
echo $person_datails['3']."</br>";
echo $person_datails['4']."</br>";

   $person_info_count = count($person_datails);
   echo 'person_info_count '. $person_info_count.'</br>';

if($person_info_count ==5){
    echo 'person info all 0k';
}
else{
    echo 'person info mis match';
}

// Associative array
$person_datails = array(
                    'name' => 'Habibur Rahman',
                    'phone_number' => '0131897865',
                    'email' => 'rmdhabibur621@gmail.com',
                    'distric' => 'Naogaon'
);

echo $person_datails['name']."</br>";
echo $person_datails['phone_number']."</br>";
echo $person_datails['email']."</br>";
echo $person_datails['distric']."</br>";


// multidimentional array
$person_datails = array(
    'username' => 'Habibur Rahman',
    //personal i
    'habib_info' => array(
        'age' => 23,
        'village' => 'Moniary',
        // hobby
        'hobby' => array(
            'technology' => 'Computer',
            'game' => 'action',
        ),
    ),
    // food
    "food" => array(
        'food_name' => 'vat gosto',
        'food_quality' => 'very nice',
    ),
);
echo $person_datails['username'].'</br>';
echo $person_datails['habib_info']['age'].'</br>';
echo $person_datails['habib_info']['village'].'</br>';
echo $person_datails["habib_info"]['hobby']['technology'].'</br>';
echo $person_datails["habib_info"]['hobby']['game'].'</br>';
echo $person_datails['food']['food_name'].'</br>';
echo $person_datails['food']['food_quality'].'</br>';












?>