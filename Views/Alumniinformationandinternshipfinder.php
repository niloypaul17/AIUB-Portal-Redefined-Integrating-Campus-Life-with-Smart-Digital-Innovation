<html>
<head>
    <title>Alumni Information & Internship Finder</title>
    <style>
        body {
            background-color: skyblue;
        }
        h3 {
            text-align: center;
        }
        .box {
            width: 700px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
            margin-bottom: 20px;
        }
        label {
            display: inline-block;
            width: 200px;
        }
        .result {
            margin-top: 10px;
            padding: 10px;
            border-top: 1px solid black;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>

<body>
<h3>Alumni Information & Internship Finder</h3>

<div class="box">
    <h4>Registered Alumni</h4>

    <p>
        <strong>Name:</strong> Rahim Ahmed<br>
        <strong>Company:</strong> Google<br>
        <strong>Designation:</strong> Software Engineer<br>
        <strong>Batch:</strong> 2021
    </p>
    <hr>

    <p>
        <strong>Name:</strong> Nusrat Jahan<br>
        <strong>Company:</strong> Unilever<br>
        <strong>Designation:</strong> Management Trainee<br>
        <strong>Batch:</strong> 2020
    </p>
</div>

<div class="box">
    <h4>Post Internship (Alumni)</h4>

    <form method="POST" action="Alumniinformationandinternshipfindercheck.php">
        <label>Company Name:</label>
        <input type="text" name="company"><br><br>

        <label>Department:</label>
        <select name="dept">
            <option value="">Select</option>
            <option>CSE</option>
            <option>EEE</option>
            <option>BBA</option>
        </select><br><br>

        <label>Internship Details:</label>
        <textarea name="details" rows="3" cols="40"></textarea><br><br>

        <input type="submit" name="postInternship" value="Post Internship">
    </form>
</div>

<div class="box">
    <h4>Search Internship (Students)</h4>

    <label>Select Department:</label>
    <select id="searchDept">
        <option value="">Select</option>
        <option>CSE</option>
        <option>EEE</option>
        <option>BBA</option>
    </select>
    <input type="button" value="Search" onclick="searchInternship()">

    <div id="internshipResult" class="result"></div>
</div>

<div class="box">
    <h4>Apply for Internship</h4>

    <form method="POST" action="Alumniinformationandinternshipfindercheck.php">
        <label>Student ID:</label>
        <input type="text" name="sid"><br><br>

        <label>Name:</label>
        <input type="text" name="sname"><br><br>

        <input type="submit" name="applyInternship" value="Apply">
    </form>
</div>

<script>
var internshipDept = "";
var internshipCompany = "";
var internshipDetails = "";

function postInternship(){

    internshipCompany = document.getElementById("company").value;
    internshipDept = document.getElementById("dept").value;
    internshipDetails = document.getElementById("details").value;

    if(internshipCompany == "" || internshipDept == "" || internshipDetails == ""){
        document.getElementById("postMsg").innerHTML = "Please fill all fields";
        document.getElementById("postMsg").className = "error";
        return;
    }

    document.getElementById("postMsg").innerHTML = "Internship posted successfully!";
    document.getElementById("postMsg").className = "success";
}

function searchInternship(){

    var searchDept = document.getElementById("searchDept").value;

    if(searchDept == ""){
        document.getElementById("internshipResult").innerHTML = "Please select a department";
        return;
    }

    if(searchDept == internshipDept){
        document.getElementById("internshipResult").innerHTML =
            "<strong>Company:</strong> " + internshipCompany + "<br>" +
            "<strong>Department:</strong> " + internshipDept + "<br>" +
            "<strong>Details:</strong> " + internshipDetails;
    } else {
        document.getElementById("internshipResult").innerHTML =
            "No internship available for selected department";
    }
}

function applyInternship(){

    var sid = document.getElementById("sid").value;
    var name = document.getElementById("sname").value;

    if(sid == "" || name == ""){
        document.getElementById("applyMsg").innerHTML = "Please enter student details";
        document.getElementById("applyMsg").className = "error";
        return;
    }

    document.getElementById("applyMsg").innerHTML =
        "Application submitted successfully! You will be notified soon.";
    document.getElementById("applyMsg").className = "success";

    alert("Internship application submitted!");
}
</script>
</body>
</html>
