<?php
    $a = 1;
    $b = 'Habib';
    echo gettype($a).'<br>';
    $change_type = (string) $a;
    echo gettype($change_type).'<br>';
    $change_b = (int) $b;
    echo gettype($change_b).'<br>';

    // max..
    $number = max(50,20,10,40,100,300,100);
    echo "Maximum number $number".'<br>';
    $min_number = min(50,20,10,40,100,300,100);
    echo "Minimum Number $min_number".'<br>';

    $negetive_value = -100.10;
    echo abs($negetive_value).'<br>';
    $squer_man = 100;
    echo sqrt($squer_man).'<br>';

    $random_number = rand(20,500);
    echo $random_number.'<br>';

    $round = 40.200;
    echo round($round);
?>