<?php

require('config.php');
$student_name = $_POST["student_name"];
$roll_number = $_POST["roll_number"];
$rag = $_POST["ragi"];
$exam_year = $_POST["exam_year"];
$location = 'location: Result.php?msg=Success';
$query = " INSERT INTO student_result (student_name, roll_number, ragistration_number, exam_year)
           VALUES ('$student_name', '$roll_number', '$rag', '$exam_year')";
$dbOparetion = new dbOparetion();
$dbOparetion -> insertDB($conn, $query, $location);
?>