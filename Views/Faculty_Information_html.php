<?php
require_once("Authenticationcheck.php");
require_once("Faculty_Information_css.php");
//require_once("../Controllers/Faculty_Information_Valid.php");
require_once("../Controllers/Faculty_Information_Valid_js.php");
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Faculty Information
        </title>
        <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1800">
    </head>
    <body>
        <header>
            <img src="../Assests/AIUB Logo.png" alt="AIUB Logo" id="logo">
            <img src="../Assests/aiub_200X70.png" alt="Portal" id="Portal">
            <button id="B1" onclick="window.location.href='Dashboard.php'">Dashboard</button>
        </header>
        <img src="../Assests/image.jpg" alt="Background" id="BackImg">
        <h1 id="Title1">WELCOME TO FACULTY INFORMATION PAGE</h1>
        <form method="post" id="FF1">
            <div id="F1">
            <center><h1>Faculty Information</h1>
            <input type="text" placeholder="Input Faculty name" id="Input1" name="fid">
            <input type="button" value="Search" id="sub" onclick="ajaxapply()">
            </center>
            <center>
                <!--<p class="Valid"></p>-->
            </center>
            </div>
            <div id="c1">
                Name: <br><br>
                Position: <br><br>
                Email: <br><br>
                Room Number: <br><br>
            </div>
        </form>
    </body>
</html>