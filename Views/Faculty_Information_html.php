<?php
require_once("Faculty_Information_css.php");
require_once("../Controllers/Faculty_Information_Valid.php");
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

        <link rel="stylesheet" href="../CSS/Faculty_Information.css">
    </head>
    <body>
        <header>
            <img src="../Assests/AIUB Logo.png" alt="AIUB Logo" id="logo">
            <img src="../Assests/aiub_200X70.png" alt="Portal" id="Portal">
            <button id="B1" onclick="window.location.href='Dashboard.php'">Dashboard</button>
        </header>
        <img src="../Assests/image.jpg" alt="Background" id="BackImg">
        <h1 id="Title1">WELCOME TO FACULTY INFORMATION PAGE</h1>
        <form method="post" id="F1" onsubmit="return faculty()">
            <center><h1>Faculty Information</h1>
            <input type="text" placeholder="Input Faculty name" id="Input1" name="fid">
            <input type="submit" value="Search" id="sub">
            </center>
            <center>
                <p class="Valid"><?php if(isset($massage)){echo $massage;}?></p>
                <div class="Valid" id="c1"></div>
                <p class="Valid" style="color: green"><?php if(!empty($massage2) && is_array($massage2))
                    {
                        foreach($massage2 as $msg) {echo $msg ;}
                    }
                ?>
                </p>
            </center>
            
        </form>
        <script src="../Controllers/Faculty_Information_Valid_js.php"></script>
    </body>
</html>