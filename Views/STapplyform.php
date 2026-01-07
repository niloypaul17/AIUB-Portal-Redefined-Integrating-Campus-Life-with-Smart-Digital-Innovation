<?php
   require_once('../Controllers/Authenticationcheck.php');
?>

<html>
<head>
    <title>Student Tutor Application Page</title>
    <style>
        body {
            background-color: skyblue;
        }
        h3 {
            text-align: center;
        }
        img {
            display: block;
            margin-top: 100px;
            margin-left: 900px;
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
            margin-left: 200px;
            font-size: 14px;
        }
        a{
            margin-left: 270px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<img src="../Assests/AIUB_Logo.png" width="100">
<h3>Student Tutor Application Form</h3>
<form action="../Controllers/STapplyformcheck.php" method="post" onsubmit="return validateForm()">
<div class="box">
    <label><b>Name: </b></label>
    <input type="text" id="name" name="name" oninput="e1.innerHTML=''">
    <p id="e1" class="error"></p>
    <br>
    <label><b>Degree: </b></label>
    <select id="degree" name="degree" onchange="e2.innerHTML=''">
        <option value="">Please Select A Degree  </option>
        <option value="BSc in CSE">BSc in CSE  </option>
        <option value="BSc in EEE">BSc in EEE  </option>
        <option value="BBA">BBA  </option>
        <option value="LLB">LLB  </option>
        <option value="Pharmacy">Pharmacy  </option>
    </select>
    <p id="e2" class="error"></p>
    <br>
    <label><b>CGPA: </b></label>
    <input type="text" id="cgpa" name="cgpa" oninput="e3.innerHTML=''">
    <p id="e3" class="error"></p>
    <br>
    <label><b>Current Semester: </b></label>
    <input type="text" id="semester" name="semester" oninput="e4.innerHTML=''">
    <p id="e4" class="error"></p>
    <br>
    <label><b>Completed Credits: </b></label>
    <input type="text" id="credits" name="credits" oninput="e5.innerHTML=''">
    <p id="e5" class="error"></p>
    <br>
    <label><b>Teaching Experience: </b></label>
    <input type="radio" id="expYes" name="exp" value="yes" onclick="e6.innerHTML=''"> Yes
    <input type="radio" id="expNo" name="exp" value="no" onclick="e6.innerHTML=''"> No
    <p id="e6" class="error"></p>
    <br>
    <label><b>Faculty Reference: </b></label>
    <input type="text" id="reference" name="reference" oninput="e8.innerHTML=''">
    <p id="e8" class="error"></p>
    <br>
    <input type="submit" name="submit" value="Apply">
    <br>
    <br>
    <a href="Dashboard.php">Back</a>
</div>
</form>

<script>
function validateForm(){
    var name = document.getElementById("name").value;
    var degree = document.getElementById("degree").value;
    var cgpa = document.getElementById("cgpa").value;
    var semester = document.getElementById("semester").value;
    var credits = document.getElementById("credits").value;
    var reference = document.getElementById("reference").value;
    var expYes = document.getElementById("expYes").checked;
    var expNo = document.getElementById("expNo").checked;

    if(name === ""){
        e1.innerHTML = "Name is required";
        return false;
    }
    if(degree === ""){
        e2.innerHTML = "Please select a degree";
        return false;
    }
    if(cgpa === "" || cgpa < 3.50){
        e3.innerHTML = "CGPA must be at least 3.50";
        return false;
    }
    if(semester === ""){
        e4.innerHTML = "Semester is required";
        return false;
    }
    if(credits === "" || credits < 90){
        e5.innerHTML = "At least 90 credits required";
        return false;
    }
    if(!expYes && !expNo){
        e6.innerHTML = "Please select an option";
        return false;
    }
    if(reference === ""){
        e8.innerHTML = "Faculty reference is required";
        return false;
    }
    alert("Student tutor apply form has been submitted successfully!");
    return true;
}
</script>
</body>
</html>
