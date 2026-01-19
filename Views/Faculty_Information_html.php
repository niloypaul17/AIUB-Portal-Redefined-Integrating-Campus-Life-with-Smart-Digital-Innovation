<?php
require_once("../Controllers/Authenticationcheck.php");
require_once("Faculty_Information_css.php");
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
            <img src="../Assets/AIUB Logo.png" alt="AIUB Logo" id="logo">
            <img src="../Assets/aiub_200X70.png" alt="Portal" id="Portal">
            <button id="B1" onclick="window.location.href='Dashboard.php'">Dashboard</button>
        </header>
        <img src="../Assets/image.jpg" alt="Background" id="BackImg">
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
            <div id="INF1">
                <center>
                    <b>Faculty Vision</b>
                </center>
                <br>
                <b>Faculty of Science and Technology:</b> The Faculty of Science and Technology is committed to equip students with world class scientific research and industry-oriented knowledge and skills. <br>
                <b>Faculty of Engineering:</b> The Faculty of Engineering will endeavor to nurture students for creativity and innovation dedicated to problem solving and lifelong learning for research, entrepreneurship, and professionalism. <br>
                <b>Faculty of Business Administration:</b> The Faculty of Business Administration relentlessly pursues sustainable, excellent business administration programs, whose graduates are equipped with competent learning domains and a strong sense of ethical values, ready to meet the emerging demands and requirements of the global and local markets. <br>
                <b>Faculty of Arts and Social Sciences:</b> The Faculty of Arts and Social Sciences is committed to function as a strong social catalyst that will equip the students with innovative knowledge and moral values to make sustainable changes in the society in terms of ensuring justice, equity and public good.
            </div>
        </form>
    </body>
</html>