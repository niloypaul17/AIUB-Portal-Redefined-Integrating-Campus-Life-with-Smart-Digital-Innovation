<html>
<head>
    <title>Free Lab Slot Booking Page</title>
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
            width: 170px;
        }
        .error {
            color: red;
            margin-left: 200px;
            font-size: 14px;
        }
        a {
            margin-left: 270px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<img src="../Assets/AIUB_Logo.png" width="100">
<h3>Free Lab Slot Booking Form</h3>

<form method="POST" action="Labslotbookingcheck.php">
<div class="box">

    <label><b>Student ID: </b></label>
    <input type="text" id="sid" name="sid" oninput="e1.innerHTML=''">
    <p id="e1" class="error"></p>
    <br>

    <label><b>Name: </b></label>
    <input type="text" id="name" name="name" oninput="e2.innerHTML=''">
    <p id="e2" class="error"></p>
    <br>

    <label><b>Available Lab Slots: </b></label>
    <p style="margin-left:170px;">
        Lab Slot 1 – Sunday (2:00 PM – 4:20 PM)
        <br>
        Lab Slot 2 – Tuesday (10:00 AM – 12:20 PM)
        <br>
        Lab Slot 3 – Thursday (1:00 PM – 3:20 PM)
    </p>
    <br>

    <label><b>Select Lab Slot: </b></label>
    <select id="slot" name="slot" onchange="e3.innerHTML=''">
        <option value="">Please Select a Slot</option>
        <option value="lab1">Lab Slot 1 – Sunday (2:00 PM – 4:20 PM)</option>
        <option value="lab2">Lab Slot 2 – Tuesday (10:00 AM – 12:20 PM)</option>
        <option value="lab3">Lab Slot 3 – Thursday (1:00 PM – 3:20 PM)</option>
    </select>
    <p id="e3" class="error"></p>
    <br>

    <label><b>Reason for Booking: </b></label>
    <textarea id="reason" name="reason" rows="4" cols="30" oninput="e4.innerHTML=''"></textarea>
    <p id="e4" class="error"></p>
    <br>

    <input type="submit" name="submit" value="Book Slot">
    <br><br>
    <a href="Dashboard.php">Back</a>
</div>
</form>

<script>
function validateForm(){
    var sid = document.getElementById("sid").value;
    var name = document.getElementById("name").value;
    var slot = document.getElementById("slot").value;
    var reason = document.getElementById("reason").value;

    if(sid === ""){
        e1.innerHTML = "Student ID is required";
        return false;
    }
    if(name === ""){
        e2.innerHTML = "Name is required";
        return false;
    }
    if(slot === ""){
        e3.innerHTML = "Please select a lab slot";
        return false;
    }
    if(reason === ""){
        e4.innerHTML = "Please provide a reason";
        return false;
    }
    alert("Lab slot booked successfully!");
    location.reload();
    return false;
}
</script>
</body>
</html>
