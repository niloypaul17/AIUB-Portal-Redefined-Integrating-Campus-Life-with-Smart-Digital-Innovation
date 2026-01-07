<?php
   require_once('../Controllers/Authenticationcheck.php');
?>

<html>
<head>
    <title>Search Lost Item Page</title>
    <style>
        body {
            background-color: skyblue;
        }
        h3 {
            text-align: center;
        }
        img {
            margin-top: 150px;
            margin-left: 900px;
        }
        .box {
            width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
        }
        label {
            display: inline-block;
            width: 150px;
        }
        a {
            margin-left: 220px;
        }
        .error {
            color: red;
            text-align: center;
            font-size: 14px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body> 
<img src="../Assests/AIUB_Logo.png" width="100">
<h3>Search for a Lost Item</h3>
<form action="../Controllers/Searchlostitemcheck.php" method="post" onsubmit="return validateSearch()">
<div class="box">
    <label><b>Item Name: </b></label>
    <input type="text" id="searchitem" name="searchitem" oninput="e1.innerHTML=''">
    <br>
    <br>
    <input type="submit" name="search" value="Search">
    <p id="e1" class="error"></p>
    <a href="Lost and Found.php">Back</a>
</div>
</form>

<script>
function validateSearch(){
    var searchitem = document.getElementById("searchitem").value;

    if(searchitem == ""){
        e1.innerHTML = "Please enter an item name";
        return false;
    }
    return true;
}
</script>
</body>
</html>
