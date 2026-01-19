<?php
require_once('Database.php');
 
function classcheck($class){
    $con = getConnection();
    $sql = "INSERT INTO course_credit_information (department,credit) VALUES('{$class['department']}', '{$class['credit']}')";
    $result = mysqli_query($con, $sql);  
   
    if($result){
        return true;
    }else{
        return false;
    }
}
?>