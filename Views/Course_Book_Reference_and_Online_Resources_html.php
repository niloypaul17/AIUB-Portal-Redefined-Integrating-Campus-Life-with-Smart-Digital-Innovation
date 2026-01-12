<?php
require_once("Authenticationcheck.php");
require_once("Course_Book_Reference_and_Online_Resources_css.php");
require_once("../Controllers/Course_Book_Reference_and_Online_Resources_Valid.php");
require_once("../Controllers/Course_Book_Reference_and_Online_Resources_Valid_js.php");
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Course Book Reference and Online Resources
        </title>
        <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1800">

        <link rel="stylesheet" href="../CSS/Course_Book_Reference_and_Online_Resources.css">
    </head>
    <body>
        <header>
            <img src="../Assests/AIUB_Logo.png" alt="AIUB Logo" id="logo">
            <img src="../Assests/aiub_200X70.png" alt="Portal" id="Portal">
            <button id="B1" onclick="window.location.href='Dashboard.php'">Dashboard</button>
        </header>
        <img src="../Assests/new_campus_pic_7.jpg" alt="Background" id="BackImg">
        <h1 id="Title1">WELCOME TO</h1>
        <h1 id="Title2">Course Book Reference and Online Resources</h1>
        <form method="post" id="f1" onsubmit="return checkbook()">
            <div class="div">
                Course Name:
                <input type="text" name="course" id="I1">
            </div>
            <input type="submit" id="IB1">
            <center>
                <p class="Valid"><?php if(isset($massage)){echo $massage;}?></p>
                <div class="Valid" id="c1"></div>
                <p><?php if(isset($massage2)){echo $massage2;}else{ echo 'Book not found';}?></p>
            </center>
        </form>
    </body>
</html>