<?php
require_once('Database.php');

function classcheck($class){
    $con = getConnection();
    $sql = "select * from class_routine_and_course_generator where ID='{$class['ID']}' and department='{$class['department']}'";
    $result = mysqli_query($con, $sql);   
    
    if(mysqli_num_rows($result) == 1){
        return true;
    }else{
        return false;
    }
}
?>