<?php
require_once('Database.php');

function studentcheck($student){
    $con = getConnection();
    $sql = "INSERT INTO student_id_application(department,time) VALUES({$student['department']}, {$student['time']})";
    $result = mysqli_query($con, $sql);   
    
    if($result){
        return true;
    }else{
        return false;
    }
}
?>