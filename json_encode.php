<?php
    require('config.php');
    // $array = array('a'=> 1, 'b'=> 2, 'c'=> 3, 'd'=> 4);
    // echo json_encode($array);
    $query = "SELECT * FROM student_result";
    $sql = mysqli_query($conn, $query) or die ("Sql query failed");
    if($sql == true){
        $output = mysqli_fetch_all($sql, MYSQLI_ASSOC);
        echo json_encode($output);
    }
    else{
        echo 'false';
    }




?>