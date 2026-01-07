<?php
require_once('Database.php');

function coursecheck($course){
    $con = getConnection();
    $sql = "select * from course_book where coursename='{$course['coursename']}'";
    $result = mysqli_query($con, $sql);   
    
    if(mysqli_num_rows($result) == 1){
        return true;
    }else{
        return false;
    }
}
?>