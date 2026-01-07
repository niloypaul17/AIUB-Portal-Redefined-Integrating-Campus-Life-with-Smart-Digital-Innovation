<?php
//Student_ID_reacquire_application_system_check
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