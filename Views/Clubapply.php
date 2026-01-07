<?php
   require_once('../Controllers/Authenticationcheck.php');
?>

<html>
<head>
    <title>Club Application Form</title>
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
        .box {
            width: 600px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
        }
        label {
            display: inline-block;
            width: 150px;
        }
        .error {
            color: red;
            margin-left: 180px;
            font-size: 14px;
        }
        img {
        margin-top: 150px;
        margin-left: 895px;
        }
        a {
            margin-left: 270px;
        }
    </style>
</head>
<body>
<img src="../Assests/AIUB_Logo.png" width="100">
<h1>Welcome to Club Application Form</h1>
<h3>Please fill up the form below to apply for club membership</h3>

<form action="../Controllers/Clubapplycheck.php" method="post" onsubmit="return validateForm()">
<div class="box">

    <label><b>Student Name: </b></label>
    <input type="text" id="name" name="name" oninput="e1.innerHTML=''">
    <p id="e1" class="error"></p>
    <br>
    <label><b>Student ID: </b></label>
    <input type="text" id="studentid" name="studentid" oninput="e2.innerHTML=''">
    <p id="e2" class="error"></p>
    <br>
    <label><b>Semester: </b></label>
    <input type="text" id="semester" name="semester" oninput="e3.innerHTML=''">
    <p id="e3" class="error"></p>
    <br>
    <label><b>Passion: </b></label>
    <input type="text" id="passion" name="passion" oninput="e4.innerHTML=''">
    <p id="e4" class="error"></p>
    <br>
    <label><b>Why do you want to join this club? </b></label>
    <textarea id="reason" name="reason" oninput="e5.innerHTML=''"></textarea>
    <p id="e5" class="error"></p>
    <br>
    <input type="submit" name="submit" value="Submit Application">
    <br>
    <br>
    <a href="Clubinformation.php">back</a>
</div>
</form>

<script>
function validateForm() {
    var name = document.getElementById("name").value;
    var studentid = document.getElementById("studentid").value;
    var semester = document.getElementById("semester").value;
    var passion = document.getElementById("passion").value;
    var reason = document.getElementById("reason").value;

    if (name === "") {
        e1.innerHTML = "Student name is required";
        return false;
    }

    if (studentid === "") {
    e2.innerHTML = "Student ID is required";
    return false;
    }

    if (studentid.length !== 8) {
    e2.innerHTML = "Student ID must be exactly 8 characters";
    return false;
    }

    if (semester === "") {
        e3.innerHTML = "Semester is required";
        return false;
    }
    if (passion === "") {
        e4.innerHTML = "Please write your passion";
        return false;
    }
    if (reason === "") {
        e5.innerHTML = "Please explain why you want to join";
        return false;
    }
    alert("Club apply form has been submitted successfully!");
    return true;
}
</script>
</body>
</html>
