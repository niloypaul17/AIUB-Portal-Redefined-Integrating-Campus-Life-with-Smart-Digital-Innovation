<?php

require_once('Database.php');

function classcheck($class){
    $con = getConnection();
    $sql = "INSERT INTO class_routine_and_course_generator (ID,department,credit) VALUES('{$class['ID']}', '{$class['department']}', '{$class['credit']}')";
    $result = mysqli_query($con, $sql);   
    
    if($result){
        return true;
    }else{
        return false;
    }
}
?>