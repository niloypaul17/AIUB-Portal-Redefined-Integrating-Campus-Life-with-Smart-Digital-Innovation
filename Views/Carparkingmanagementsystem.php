<html>
<head>
    <title>AIUB Parking Management System</title>
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
        .success {
            color: green;
            margin-top: 15px;
            border-top: 1px solid black;
            padding-top: 10px;
        }
        a {
            margin-left: 270px;
        }
    </style>
</head>

<body>
<img src="../Assests/AIUB_Logo.png" width="100">
<h3>Car / Bike Parking Registration</h3>

<form method="POST" action="Carparkingmanagementsystemcheck.php">
<div class="box">

    <label><b>Student ID: </b></label>
    <input type="text" name="sid" id="sid" oninput="e1.innerHTML=''">
    <p id="e1" class="error"></p>

    <label><b>Vehicle Number: </b></label>
    <input type="text" name="vno" id="vno" oninput="e2.innerHTML=''">
    <p id="e2" class="error"></p>

    <label><b>Vehicle Type: </b></label>
    <input type="radio" name="type" value="Car" onclick="e3.innerHTML=''"> Car
    <input type="radio" name="type" value="Bike" onclick="e3.innerHTML=''"> Bike
    <p id="e3" class="error"></p>

    <br>
    <input type="submit" name="register" value="Register Parking">

    <div id="result" class="success"></div>

    <br>
    <a href="Dashboard.php">Back</a>

</div>
</form>

<script>
var totalCarSlots = 5;
var totalBikeSlots = 8;

var usedCarSlots = 0;
var usedBikeSlots = 0;

function registerParking(){

    var sid = document.getElementById("sid").value;
    var vno = document.getElementById("vno").value;
    var isCar = document.getElementById("car").checked;
    var isBike = document.getElementById("bike").checked;

    if(sid == ""){
        e1.innerHTML = "Student ID is required";
        return false;
    }

    if(vno == ""){
        e2.innerHTML = "Vehicle number is required";
        return false;
    }

    if(!isCar && !isBike){
        e3.innerHTML = "Please select vehicle type";
        return false;
    }

    if(isCar){
        if(usedCarSlots >= totalCarSlots){
            alert("Car parking is full. Entry denied.");
            return false;
        }

        usedCarSlots++;

        var carSpot = Math.floor(Math.random() * totalCarSlots) + 1;

        document.getElementById("result").innerHTML =
            "<strong>Parking Confirmed!</strong><br>" +
            "Vehicle Type: Car<br>" +
            "Student ID: " + sid + "<br>" +
            "Vehicle No: " + vno + "<br>" +
            "Parking Area: Car Zone<br>" +
            "Slot Number: C-" + carSpot;
    }
    if(isBike){
        if(usedBikeSlots >= totalBikeSlots){
            alert("Bike parking is full. Entry denied.");
            return false;
        }

        usedBikeSlots++;

        var bikeSpot = Math.floor(Math.random() * totalBikeSlots) + 1;

        document.getElementById("result").innerHTML =
            "<strong>Parking Confirmed!</strong><br>" +
            "Vehicle Type: Bike<br>" +
            "Student ID: " + sid + "<br>" +
            "Vehicle No: " + vno + "<br>" +
            "Parking Area: Bike Zone<br>" +
            "Slot Number: B-" + bikeSpot;
    }

    alert("Parking slot allocated successfully!");
    return false;
}
</script>
</body>
</html>
