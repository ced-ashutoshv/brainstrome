<?php

    $stu_name = ! empty( $_POST[ 'stu_name' ] ) ? $_POST[ 'stu_name' ] : '';
    $regno = ! empty( $_POST[ 'regno' ] ) ? $_POST[ 'regno' ] : '';
    $course = ! empty( $_POST[ 'course' ] ) ? $_POST[ 'course' ] : '';
    $course_code = ! empty( $_POST[ 'course_code' ] ) ? $_POST[ 'course_code' ] : '';
    $cat1 = ! empty( $_POST[ 'cat1' ] ) ? $_POST[ 'cat1' ] : '';
    $cat2 = ! empty( $_POST[ 'cat2' ] ) ? $_POST[ 'cat2' ] : '';
    $da2 = ! empty( $_POST[ 'da2' ] ) ? $_POST[ 'da2' ] : '';
    $da1 = ! empty( $_POST[ 'da1' ] ) ? $_POST[ 'da1' ] : '';
    $quiz = ! empty( $_POST[ 'quiz' ] ) ? $_POST[ 'quiz' ] : '';

    $conn = new mysqli('localhost', 'root', '', 'leaderboard');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "error";
    } 
    else{
        echo "conn successful";
    }

    $marks = 100;
    $sql = "INSERT INTO `marks` (`Name`, `reg-number`, `Course`, `Ccode`, `average`) VALUES ( $stu_name, $regno, $course, $course_code,  $marks)";

    $result = $conn->query($sql);

    echo '<pre>'; var_dump( $result ); echo '</pre>'; die;

    $conn-> close();
?>