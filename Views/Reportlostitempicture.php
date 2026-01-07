<?php
   require_once('../Controllers/Authenticationcheck.php');
?>

<html>
<head>
    <title>Upload Lost Item Picture Page</title>
    <style>
        body {
            background-color: skyblue;
        }
        h3 {
            text-align: center;
        }
        img {
            margin-top: 175px;
            margin-left: 900px;
        }
        label {
            display: inline-block;
            width: 180px;
        }
        a {
            margin-left: 200px;
        }
        .box {
            width: 500px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
            text-align: left;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <img src="../Assests/AIUB_Logo.png" width="100">
    <h3>Please upload a picture of the lost item:</h3>

    <form action="../Controllers/uploadpicture.php" method="post" enctype="multipart/form-data">
        <div class="box">
            <label><b>Lost Item Picture: </b></label>
            <input type="file" name="lostitempicture">
            <br>
            <br>
            <input type="submit" name="submit" value="Upload Picture">
            <br>
            <br>
            <a href="Reportlostitem.php">Back</a>
        </div>
    </form>
</body>
</html>
