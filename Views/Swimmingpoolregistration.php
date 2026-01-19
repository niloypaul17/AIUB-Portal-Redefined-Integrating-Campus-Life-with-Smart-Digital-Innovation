<html>
<head>
    <title>Swimming Pool Registration Page</title>
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
            width: 180px;
        }
        .error {
            color: red;
            margin-left: 200px;
            font-size: 14px;
        }
        .status {
            margin-left: 200px;
            font-weight: bold;
        }
        a {
            margin-left: 270px;
        }
    </style>
</head>

<body>
<img src="../Assets/AIUB_Logo.png" width="100">
<h3>Swimming Pool Registration Form</h3>

<form method="POST" action="Swimmingpoolregistrationcheck.php">
<div class="box">

    <label><b>Name: </b></label>
    <input type="text" name="name" id="name" oninput="e1.innerHTML=''">
    <p id="e1" class="error"></p>

    <label><b>Student ID: </b></label>
    <input type="text" name="sid" id="sid" oninput="e2.innerHTML=''">
    <p id="e2" class="error"></p>

    <label><b>Department: </b></label>
    <select name="dept" id="dept" onchange="e3.innerHTML=''">
        <option value="">Please Select Department</option>
        <option>CSE</option>
        <option>EEE</option>
        <option>BBA</option>
        <option>LLB</option>
        <option>Pharmacy</option>
    </select>
    <p id="e3" class="error"></p>

    <label><b>Contact No: </b></label>
    <input type="text" name="contact" id="contact" oninput="e4.innerHTML=''">
    <p id="e4" class="error"></p>

    <label><b>Preferred Time Slot: </b></label>
    <select name="time" id="time" onchange="checkSlot(); e5.innerHTML=''">
        <option value="">Select Time Slot</option>
        <option value="morning">Morning (7AM - 9AM)</option>
        <option value="afternoon">Afternoon (2PM - 4PM)</option>
        <option value="evening">Evening (6PM - 8PM)</option>
    </select>
    <p id="e5" class="error"></p>
    <p id="slotStatus" class="status"></p>

    <br>
    <input type="submit" name="register" value="Register">
    <br><br>
    <a href="Dashboard.php">Back</a>

</div>
</form>

<script>
function checkSlot(){
    var time = document.getElementById("time").value;
    var status = document.getElementById("slotStatus");

    var morningAvailable = true;
    var afternoonAvailable = false;
    var eveningAvailable = true;

    if(time == "morning"){
        if(morningAvailable){
            status.innerHTML = "Morning slot is available";
            status.style.color = "green";
        } else {
            status.innerHTML = "Morning slot is not available";
            status.style.color = "red";
        }
    }

    if(time == "afternoon"){
        if(afternoonAvailable){
            status.innerHTML = "Afternoon slot is available";
            status.style.color = "green";
        } else {
            status.innerHTML = "Afternoon slot is not available";
            status.style.color = "red";
        }
    }

    if(time == "evening"){
        if(eveningAvailable){
            status.innerHTML = "Evening slot is available";
            status.style.color = "green";
        } else {
            status.innerHTML = "Evening slot is not available";
            status.style.color = "red";
        }
    }

    if(time == ""){
        status.innerHTML = "";
    }
}

function validateForm(){

    var name = document.getElementById("name").value;
    var sid = document.getElementById("sid").value;
    var dept = document.getElementById("dept").value;
    var contact = document.getElementById("contact").value;
    var time = document.getElementById("time").value;

    var morningAvailable = true;
    var afternoonAvailable = false;
    var eveningAvailable = true;

    if(name == ""){
        e1.innerHTML = "Name is required";
        return false;
    }

    if(sid == ""){
        e2.innerHTML = "Student ID is required";
        return false;
    }

    if(dept == ""){
        e3.innerHTML = "Please select department";
        return false;
    }

    if(contact == ""){
        e4.innerHTML = "Contact number is required";
        return false;
    }

    if(time == ""){
        e5.innerHTML = "Please select time slot";
        return false;
    }

    if(time == "morning" && morningAvailable == false){
        alert("Morning slot is not available");
        return false;
    }

    if(time == "afternoon" && afternoonAvailable == false){
        alert("Afternoon slot is not available");
        return false;
    }

    if(time == "evening" && eveningAvailable == false){
        alert("Evening slot is not available");
        return false;
    }
    alert("Registration confirmed! Your selected slot is available.");
    location.reload();
    return false;
}
</script>
</body>
</html>
