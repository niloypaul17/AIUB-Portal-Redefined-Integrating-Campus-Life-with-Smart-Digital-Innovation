<?php
require_once('Database.php');

function STapply($STapplication){
    $con = getConnection();
    $sql = "insert into stapplyform values('{$STapplication['name']}','{$STapplication['degree']}','{$STapplication['cgpa']}','{$STapplication['semester']}','{$STapplication['credits']}','{$STapplication['experience']}','{$STapplication['reference']}')";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}
?>
