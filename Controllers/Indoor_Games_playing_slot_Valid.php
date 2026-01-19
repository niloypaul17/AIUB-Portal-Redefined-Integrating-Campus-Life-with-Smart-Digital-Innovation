<?php
require_once("../Models/Indoor_Games_playing_slot_check.php");
if(!isset($_SESSION)) { session_start(); }

$massage = "";
$studentid = $_SESSION['studentid'] ?? '22468721'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gameData = [
        'gamename' => $_POST["gamename"],
        'time' => $_POST["time"],
        'studentid' => $studentid
    ];

    $status = gamecheck($gameData);

    if ($status === "taken") {
        $massage = " This slot is already booked by another student.";
    } elseif ($status === "time_conflict") {
        $massage = " You already have another game booked at " . $gameData['time'];
    } elseif ($status === "duplicate") {
        $massage = " You have already booked a slot for " . $gameData['gamename'];
    } elseif ($status) {
        $massage = " Success! Slot confirmed at " . $gameData['time'];
    } else {
        $massage = " Error in booking. Try again.";
    }
}

$myList = getMyBookings($studentid);
?>