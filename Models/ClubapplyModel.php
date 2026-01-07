<?php
require_once('Database.php');

function Clubapply($clubapplication){
    $con = getConnection();
    $sql = "insert into clubapplyform values('{$clubapplication['name']}','{$clubapplication['studentid']}','{$clubapplication['semester']}','{$clubapplication['passion']}','{$clubapplication['reason']}')";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}
?>
