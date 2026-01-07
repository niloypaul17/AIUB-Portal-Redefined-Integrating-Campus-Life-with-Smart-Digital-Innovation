<?php
    session_start();
?>

<html>
    <head>
        <title>Login Page</title>
        <style>
            body {
            background-color: skyblue;
            }
            label{
                display: inline-block;
                width: 100px;
            }
            .box {
            width: 300px;
            margin-top: 200px;
            margin-right: 200px;
            margin-bottom: 300px;
            margin-left: 750px;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
            text-align: center;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="box">
    <img src="../Assests/AIUB_Logo.png" width="100">
    <br>
    <h2>American International University-Bangladesh</h2>
    <h5>Sign In With Your Student ID and Password</h5>
    <br>
    <form action="../Controllers/Logincheck.php" method="post" onsubmit="return validateform()">
            <fieldset style="border: 2px solid black">
                <legend style="border: 2px solid black">Login</legend>
                <br>
                <label><b>Student ID: </b></label>
                <input type="text" name="studentid" style="border: 2px solid black" id="studentid" oninput="error1.innerHTML=''">
                <p id="error1" style="color: red"></p>
                <br>
                <br>
                <label><b>Password: </b></label>
                <input type="password" name="password" style="border: 2px solid black" id="password" oninput="error2.innerHTML=''">
                <p id="error2" style="color: red"></p>
                <br>
                <br>
                <input type="submit" name="submit" value="Login">
            </fieldset>
    </form>
    <a href="Registrationpage.php">Sign Up</a>
    <br>
    <br>
    <a href="Passwordreset.php">Forgot password ?</a>
    </div>

<script>
    function validateform(){
        var studentid = document.getElementById("studentid").value;
        var password = document.getElementById("password").value;
        var error1 = document.getElementById("error1")
        var error2 = document.getElementById("error2")

        if(studentid == ""){
            error1.innerHTML="Student ID cannot be empty"
            return false;
        }
        if(password == ""){
            error2.innerHTML="Password cannot be empty"
            return false;
        }
        if(studentid.length !== 8){
            error1.innerHTML="Student ID must be  8 characters long"
            return false;
        }
        if(password.length < 8){
            error2.innerHTML="Password must be at least 8 characters long"
            return false;
        }
        return true;
    }
</script>
</body>
</html>