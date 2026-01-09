<?php
require_once('Database.php');

function facultycheck($faculty){
    $con = getConnection();
    $sql = "select * from faculty_information where facultyname='{$faculty['facultyname']}'";
    $result = mysqli_query($con, $sql);   
    
    if($row = mysqli_fetch_assoc($result)){
        return $row;
    }
}
?>