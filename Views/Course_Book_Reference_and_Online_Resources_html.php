<?php
require_once("Course_Book_Reference_and_Online_Resources_css.php");
require_once("../Controllers/Course_Book_Reference_and_Online_Resources_Valid.php");
?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Course Book Reference and Online Resources
        </title>
        <meta name="description" content="This is a Web site for Local Festival Stall Allocation & Fee Management System" >
        <meta name="author" content="Arnob Sarker Supta and Hridrita Saha Moon">
        <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1800">

        <link rel="stylesheet" href="../CSS/Course_Book_Reference_and_Online_Resources.css">
    </head>
    <body>
        <header>
            <img src="../Assests/AIUB_Logo.png" alt="AIUB Logo" id="logo">
            <img src="../Assests/aiub_200X70.png" alt="Portal" id="Portal">
            <button id="B1" onclick="window.location.href='Class_Routine_and_Upcoming_Registration_Course_Generator.html'">Faculty Information</button>
            <a href="" id="a1">Settings</a>
            <a href="" id="a2">Notification</a>
            <a href="" id="a3">Logout</a>
        </header>
        <img src="../Assests/new_campus_pic_7.jpg" alt="Background" id="BackImg">
        <h1 id="Title1">WELCOME TO</h1>
        <h1 id="Title2">Course Book Reference and Online Resources</h1>
        <form method="post" id="f1">
            <div class="div">
                Course Name:
                <input type="text" name="course" id="I1">
            </div>
            <center><p id="Valid"><?php if(isset($massage)){echo $massage;}?></p></center>
            <input type="submit" id="IB1">
        </form>
        <?php
        if($massage2=="successful"){
        }
        ?>
        <script src="../JS/Course_Book_Reference_and_Online_Resources_Valid.js"></script>
    </body>
</html>