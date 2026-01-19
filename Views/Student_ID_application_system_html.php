<?php
require_once("Authenticationcheck.php");
require_once("Student_ID_application_system_css.php");
require_once("../Controllers/Student_ID_application_system_Valid.php");
require_once("../Controllers/Student_ID_application_system_Valid_js.php");
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
        <h1 id="Title2">Student ID Application System</h1>
        <form method="post" id="f1" onsubmit="return checkstudent()">
            <div class="div">
                Which Department:
                <select name="department" id="I1" required>
                <option value="" disabled selected hidden>Select a department</option>
                <option value="CSE">Computer Science and Engineering</option>
                <option value="EEE">Electrical and Electronics Engineering</option>
                <option value="CoE">Computer Engineering</option>
                <option value="BBA">Bachelor of Business Administration</option>
                </select>
            </div>
            <div class="div">
                Date of ID Loss:
                <input type="date" name="date" id="I2">
            </div>
            <input type="submit" id="IB1">
            <div id="c1">
                <p class="Valid"><?php if(isset($massage)){echo $massage;}?></p>
                <p class="Valid"><?php if(isset($massage2)){echo $massage2;}?></p>
            </div>
        </form>
        <div id="INF1">
                <center>
                    <b>STUDENT ID APPLICATION</b>
                
                <br><br>
                <b>Step 1: Choose Department</b><br>
                <b>Step 2: Choose Date of ID Loss</b>
                </center>
            </div>
    </body>
</html>