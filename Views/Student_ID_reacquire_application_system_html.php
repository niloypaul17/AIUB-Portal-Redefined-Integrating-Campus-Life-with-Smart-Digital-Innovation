<?php
require_once("Student_ID_reacquire_application_system_css.php");
require_once("../Controllers/Student_ID_reacquire_application_system_Valid.php");
require_once("../Controllers/Student_ID_reacquire_application_system_Valid_js.php");
?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Student ID reacquire application system
        </title>
        <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1800">

        <link rel="stylesheet" href="../CSS/Student_ID_reacquire_application_system.css">
    </head>
    <body>
        <header>
            <img src="../Assests/AIUB Logo.png" alt="AIUB Logo" id="logo">
            <img src="../Assests/aiub_200X70.png" alt="Portal" id="Portal">
            <button id="B1" onclick="window.location.href='Dashboard.php'">Dashboard</button>
        </header>
        <img src="../Assests/new_campus_pic_7.jpg" alt="Background" id="BackImg">
        <h1 id="Title1">WELCOME TO</h1>
        <h1 id="Title2">Student ID reacquire application system</h1>
        <form method="post" id="f1" onsubmit="return checkstudent()">
            <div class="div">
                Department:
                <input type="text" name="department" id="I1">
            </div>
            <div class="div">
                Date of pick up:
                <input type="date" name="date" id="I2">
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