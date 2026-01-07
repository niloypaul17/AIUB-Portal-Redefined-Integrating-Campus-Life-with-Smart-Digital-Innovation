<?php
   require_once('../Controllers/Authenticationcheck.php');
?>
<html>
<head>
    <title>Lost and Found Page</title>
    <style>
        body {
            background-color: skyblue;
        }
        h1 {
            text-align: center;
        }
        h3 {
            text-align: center;
        }
        img {
            margin-top: 275px;
            margin-left: 900px;
        }
        form {
            text-align: center;
        }
        a{
            margin-top: 275px;
            margin-left: 925px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <img src="../Assests/AIUB_Logo.png" width="100">
    <h1>Welcome to Lost and Found</h1>
    <h3>Please select what you would like to do:</h3>
    <form>
        <input type="button" id="infobtn" value="Report a Lost Item" onclick="window.location.href='Reportlostitem.php'">
        <input type="button" id="searchbtn" value="Search for a Lost Item" onclick="window.location.href='Searchlostitem.php'">
    </form>
    <a href="Dashboard.php">Back</a>
</body>
</html>