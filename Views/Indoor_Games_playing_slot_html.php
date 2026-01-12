<?php
require_once("Authenticationcheck.php");
require_once("Indoor_Games_playing_slot_css.php");
require_once("../Controllers/Indoor_Games_playing_slot_Valid.php");
require_once("../Controllers/Indoor_Games_playing_slot_Valid_js.php");
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Indoor Games playing slot
        </title>
        <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1800">

        <link rel="stylesheet" href="../CSS/Indoor_Games_playing_slot.css">
    </head>
    <body>
        <header>
            <img src="../Assests/AIUB Logo.png" alt="AIUB Logo" id="logo">
            <img src="../Assests/aiub_200X70.png" alt="Portal" id="Portal">
            <button id="B1" onclick="window.location.href='Dashboard.php'">Dashboard</button>
        </header>
        <img src="../Assests/new_campus_pic_7.jpg" alt="Background" id="BackImg">
        <h1 id="Title1">WELCOME TO</h1>
        <h1 id="Title2">Indoor Games playing slot</h1>
        <form method="post" id="f1" onsubmit="return checkgame()">
            <div class="div">
                Which Game:
                <select name="S1" id="I2" required>
                <option value="" disabled selected hidden>Select a Game</option>
                <option value="Pool">Pool</option>
                <option value="Table Tennis">Table Tennis</option>
                <option value="Carrom">Carrom</option>
                <option value="Chess">Chess</option>
                </select>
            </div>
            <div class="div">
                Which Time:
                <select name="S2" id="I3" required>
                <option value="" disabled selected hidden>Select a time</option>
                <option value="11:00-12:00">11:00-12:00</option>
                <option value="13:00-14:00">13:00-14:00</option>
                <option value="16:00-16:30">16:00-16:30</option>
                <option value="17:00-18:00">17:00-18:00</option>
                </select>
            </div>
                <input type="submit" id="IB1">
            <center>
                <p class="Valid"><?php if(isset($massage)){echo $massage;}?></p>
                <div class="Valid" id="c1"></div>
            </center>
            
            <center><p id="result"><?php if(isset($massage2)){echo $massage2;}?></p></center>
        </form>
    </body>
</html>