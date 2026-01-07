<?php
require_once('Database.php');

function gamecheck($game){
    $con = getConnection();
    $sql = "INSERT INTO game_slot(gamename,time) VALUES({$game['gamename']}, {$game['time']})";
    $result = mysqli_query($con, $sql);   
    
    if($result){
        return true;
    }else{
        return false;
    }
}
?>