<html>
    <head>
        <title>Password Reset Page</title>
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
            margin-top: 150px;
            margin-right: 10px;
            margin-bottom: 15px;
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
    <h5>Please Write A New Password</h5>
    <br>
    <form action="../Controllers/Passwordresetcheck.php" method="post" onsubmit="return validatepasswordform()">
    <fieldset style="border: 2px solid black">
        <legend style="border: 2px solid black">Password Reset</legend>
        <br>
        <label><b>Student ID: </b></label>
        <input type="text" name="studentid" style="border: 2px solid black" id="studentid" oninput="error1.innerHTML=''">
        <p id="error1" style="color: red"></p>
        <br>
        <br>
        <label><b>New Password: </b></label>
        <input type="password" name="newpassword" style="border: 2px solid black" id="newpassword" oninput="error2.innerHTML=''">
        <p id="error2" style="color: red"></p>
        <br>
        <br>
        <label><b>Confirm Password: </b></label>
        <input type="password" name="confirmpassword" style="border: 2px solid black" id="confirmpassword" oninput="error3.innerHTML=''">
        <p id="error3" style="color: red"></p>
        <br>
        <br>
        <input type="submit" name="submit" value="Confirm">
    </fieldset>
    </form>
    <a href="Loginpage.php">Back</a>
    </div>
<script>
    function validatepasswordform(){
        var studentid = document.getElementById("studentid").value;
        var newpassword = document.getElementById("newpassword").value;
        var confirmpassword = document.getElementById("confirmpassword").value;
        var error1 = document.getElementById("error1")
        var error2 = document.getElementById("error2")
        var error3 = document.getElementById("error3")

        if(studentid == ""){
            error1.innerHTML="Student ID cannot be empty"
            return false;
        }
        if(studentid.length !== 8){
            error1.innerHTML="Student ID must be  8 characters long"
            return false;
        }
        if(newpassword == ""){
            error2.innerHTML="New Password cannot be empty"
            return false;
        }
        if(newpassword.length < 8){
            error2.innerHTML="Password must be at least 8 characters long"
            return false;
        }
        if(newpassword !== confirmpassword){
            error3.innerHTML="Passwords do not match"
            return false;
        }
        alert("Password has been reset successfully!");
        return true;
}
</script>
</body>
</html>