<?php
require_once("Authenticationcheck.php");
require_once("CCourse_Credit_Information_css.php");
require_once("../Controllers/Course_Credit_Information_Valid.php");
require_once("../Controllers/Course_Credit_Information_Valid_js.php");
?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Course credit information
        </title>
        <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1800">
    </head>
    <body>
        <header>
            <img src="../Assests/AIUB_Logo.png" alt="AIUB Logo" id="logo">
            <img src="../Assests/aiub_200X70.png" alt="Portal" id="Portal">
            <button id="B1" onclick="window.location.href='Dashboard.php'">Dashboard</button>
        </header>
        <img src="../Assests/new_campus_pic_7.jpg" alt="Background" id="BackImg">
        <h1 id="Title1">WELCOME TO</h1>
        <h1 id="Title2">Course Credit Information</h1>
        <form method="post" id="f1" onsubmit="return checkclass()">
            <div class="div">
                How many credits:
                <input type="number" name="credit" id="I1">
            </div>
            <div class="div">
                Which Department:
                <select name="S1" id="I2" required>
                <option value="" disabled selected hidden>Select a department</option>
                <option value="CSE">Computer Science and Engineering</option>
                <option value="EEE">Electrical and Electronics Engineering</option>
                <option value="CoE">Computer Engineering</option>
                <option value="BBA">Bachelor of Business Administration</option>
                </select>
            </div>
                <input type="submit" id="IB1">
                <div id="c1">
                <?php if(isset($massage)){echo $massage;}?>
                <?php if(isset($massage2)){echo $massage2;}?>
                </div>
             
        </form>
        <div id="INF1">
                <center>
                    <b>CREDITS</b>
                </center>
                <br>
                <b>Programe |  Total Credits</b> <br>
                <b>------------------------------</b> <br>
                <b>For CSE: |  149 Credits</b> <br>
                <b>For BBA: |  140 Credits</b> <br>
                <b>For CoA: |  147 Credits</b> <br>
                <b>For EEE: |  148 Credits</b>
            </div>
    </body>
</html>