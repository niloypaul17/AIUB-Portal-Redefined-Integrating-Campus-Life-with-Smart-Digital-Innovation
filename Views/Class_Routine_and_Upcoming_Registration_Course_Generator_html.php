<?php
require_once("Class_Routine_and_Upcoming_Registration_Course_Generator_css.php");
require_once("../Controllers/Class_Routine_and_Upcoming_Registration_Course_Generator_Valid.php")
?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Class Routine and Upcoming Registration Course Generator
        </title>
        <meta name="description" content="This is a Web site for Local Festival Stall Allocation & Fee Management System" >
        <meta name="author" content="Arnob Sarker Supta and Hridrita Saha Moon">
        <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1800">
    </head>
    <body>
        <header>
            <img src="../Assests/AIUB_Logo.png" alt="AIUB Logo" id="logo">
            <img src="../Assests/aiub_200X70.png" alt="Portal" id="Portal">
            <button id="B1" onclick="window.location.href='Faculty_Information.html'">Faculty Information</button>
            <a href="" id="a1">Settings</a>
            <a href="" id="a2">Notification</a>
            <a href="" id="a3">Logout</a>
        </header>
        <img src="../Assests/new_campus_pic_7.jpg" alt="Background" id="BackImg">
        <h1 id="Title1">WELCOME TO</h1>
        <h1 id="Title2">Class Routine and Upcoming Registration Course Generator</h1>
        <form method="post" id="f1">
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
            <div class="div">
                What is your ID:
                <input type="text" name="ID" id="I3">
            </div>
            <center>
                <p id="Valid"><?php if(isset($massage)){echo $massage;}?></p>
            </center>
                <input type="submit" id="IB1">
        </form>
        <?php
        if($massage2=="successful"){
        }
        ?>
    </body>
</html>