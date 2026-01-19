<?php
require_once('Database.php');

function submitcomplaint($complaintandadvice){
    $con = getConnection();
    $sql = "insert into complaintandadvice values('{$complaintandadvice['studentid']}','{$complaintandadvice['complaint']}')";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}
?>