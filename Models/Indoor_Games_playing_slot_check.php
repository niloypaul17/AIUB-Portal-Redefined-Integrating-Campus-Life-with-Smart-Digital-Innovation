<?php
require_once('Database.php');

function gamecheck($game){
    $con = getConnection();
    
    // 1. Check if the specific slot for this game is already taken by ANYONE
    $checkSlot = "SELECT * FROM game_slot WHERE gamename='{$game['gamename']}' AND time='{$game['time']}'";
    $resSlot = mysqli_query($con, $checkSlot);
    if(mysqli_num_rows($resSlot) > 0) { return "taken"; }

    // 2. NEW: Check if this student is already playing ANOTHER game at this same time
    $checkTimeConflict = "SELECT * FROM game_slot WHERE studentid='{$game['studentid']}' AND time='{$game['time']}'";
    $resTime = mysqli_query($con, $checkTimeConflict);
    if(mysqli_num_rows($resTime) > 0) { return "time_conflict"; }

    // 3. Check if this student already booked this specific game (No duplicates)
    $checkUser = "SELECT * FROM game_slot WHERE studentid='{$game['studentid']}' AND gamename='{$game['gamename']}'";
    $resUser = mysqli_query($con, $checkUser);
    if(mysqli_num_rows($resUser) > 0) { return "duplicate"; }

    $sql = "INSERT INTO game_slot(gamename, time, studentid) VALUES('{$game['gamename']}', '{$game['time']}', '{$game['studentid']}')";
    return mysqli_query($con, $sql);
}

function getMyBookings($sid){
    $con = getConnection();
    $sql = "SELECT * FROM game_slot WHERE studentid='$sid' ORDER BY time ASC";
    return mysqli_query($con, $sql);
}
?>