<?php
require_once("Faculty_Information_css.php");
require_once("../Controllers/Faculty_Information_Valid.php")
?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Faculty Information
        </title>
        <meta name="description" content="This is a Web site for Local Festival Stall Allocation & Fee Management System" >
        <meta name="author" content="Arnob Sarker Supta and Hridrita Saha Moon">
        <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1800">

        <link rel="stylesheet" href="../CSS/Faculty_Information.css">
    </head>
    <body>
        <header>
            <img src="../Assests/AIUB Logo.png" alt="AIUB Logo" id="logo">
            <img src="../Assests/aiub_200X70.png" alt="Portal" id="Portal">
            <button id="B1">Home Page</button>
            <a href="" id="a1">Settings</a>
            <a href="" id="a2">Notification</a>
            <a href="" id="a3">Logout</a>
        </header>
        <img src="../Assests/image.jpg" alt="Background" id="BackImg">
        <h1 id="Title1">WELCOME TO FACULTY INFORMATION PAGE</h1>
        <form method="post" id="F1">
            <center><h1>Faculty Information</h1>
            <input type="text" placeholder="Input Faculty ID" id="Input1" name="fid">
            <select name="S1" id="Input2" required>
                <option value="" disabled selected hidden>Select a department</option>
                <option value="CSE">Computer Science and Engineering</option>
                <option value="EEE">Electrical and Electronics Engineering</option>
                <option value="CoE">Computer Engineering</option>
                <option value="BBA">Bachelor of Business Administration</option>
            </select>
            <input type="submit" value="Search" id="sub">
            </center>
            <center><p id="Valid"><?php if(isset($massage)){echo $massage;}?></p></center>
        </form>
        <?php
        if($massage2=="successful"){
        }
        ?>
        <script src="../Controllers/Faculty_Information_Valid_js.php"></script>
    </body>
</html>