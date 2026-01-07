<?php
require_once("Indoor_Games_playing_slot_css.php");
require_once("../Controllers/Indoor_Games_playing_slot_Valid.php")
?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Indoor Games playing slot
        </title>
        <meta name="description" content="This is a Web site for Local Festival Stall Allocation & Fee Management System" >
        <meta name="author" content="Arnob Sarker Supta and Hridrita Saha Moon">
        <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1800">

        <link rel="stylesheet" href="../CSS/Indoor_Games_playing_slot.css">
    </head>
    <body>
        <header>
            <img src="../Assests/AIUB Logo.png" alt="AIUB Logo" id="logo">
            <img src="../Assests/aiub_200X70.png" alt="Portal" id="Portal">
            <button id="B1" onclick="window.location.href='Course_Book_Reference_and_Online_Resources.html'">Faculty Information</button>
            <a href="" id="a1">Settings</a>
            <a href="" id="a2">Notification</a>
            <a href="" id="a3">Logout</a>
        </header>
        <img src="../Assests/new_campus_pic_7.jpg" alt="Background" id="BackImg">
        <h1 id="Title1">WELCOME TO</h1>
        <h1 id="Title2">Indoor Games playing slot</h1>
        <form method="post" id="f1">
            <div class="div">
                Which Game:
                <select name="S1" id="I2" required>
                <option value="" disabled selected hidden>Select a Game</option>
                <option value="A">Pool</option>
                <option value="B">Table Tennis</option>
                <option value="C">Carrom</option>
                <option value="D">Chess</option>
                </select>
            </div>
            <div class="div">
                Which Time:
                <select name="S2" id="I3" required>
                <option value="" disabled selected hidden>Select a time</option>
                <option value="1">11:00-12:00</option>
                <option value="2">13:00-14:00</option>
                <option value="3">16:00-16:30</option>
                <option value="4">17:00-18:00</option>
                </select>
            </div>
                <input type="submit" id="IB1">
            <center><p id="Valid"><?php if(isset($massage)){echo $massage;}?></p></center>
            <center><p id="result"><?php if(isset($massage2)){echo $massage2;}?></p></center>
        </form>

        <script src="../JS/Indoor_Games_playing_slot_Valid.js"></script>
    </body>
</html>