<?php
require_once('Database.php');

function facultycheck($faculty){
    $con = getConnection();
    $sql = "select * from faculty_information where facultyID='{$faculty['facultyID']}' and faculty_department='{$faculty['department']}'";
    $result = mysqli_query($con, $sql);   
    
    if(mysqli_num_rows($result) == 1){
        return true;
    }else{
        return false;
    }
}
?>