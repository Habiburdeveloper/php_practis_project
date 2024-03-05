<?php

$student_name = $_POST["student_name"];
$roll_number = $_POST["roll_number"];
$rag = $_POST["ragi"];
$exam_year = $_POST["exam_year"];

    //connect database
    $dbconn = mysqli_connect("localhost", "root", "", "myphp");
    if( $dbconn == true ){
        $query = " INSERT INTO student_result (student_name, roll_number, ragistration_number, exam_year)
        VALUES ('$student_name', '$roll_number', '$rag', '$exam_year')";
        // CHECK insert...
        // var_dump($query);
        $sql = mysqli_query($dbconn, $query);
        if( $sql ){
            // echo 'Done';
            header('location: Result.php?msg=Success');
        }
        else{
            // echo 'sorry';
            header('location: Result.php?msg=Invalid');
        }
    }
    else{
        echo 'not valid db';
    }

?>