<?php
require_once("Course_Credit_Information_css.php");
require_once("../Controllers/Course_Credit_Information_Valid.php");
?>
<!DOCTYPE html>
<html>
<head><title>Credit Information</title></head>
<body>
    <header>
        <img src="../Assets/AIUB_Logo.png" id="logo">
        <img src="../Assets/aiub_200X70.png" id="Portal">
        <button id="B1" onclick="window.location.href='Dashboard.php'">Dashboard</button>
    </header>
    <img src="../Assets/new_campus_pic_7.jpg" id="BackImg">
    <h1 id="Title1">ACADEMIC PROGRESS</h1>
    <h1 id="Title2">Credit Tracker & Registration Planner</h1>

    <div id="f1">
        <form method="post">
            <div class="div">
                Department: 
                <select name="dept" id="I2">
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                </select>
            </div>
            
            <div class="div">Check Courses You Have Completed:
                <div class="course-list">
                    <?php 
                    mysqli_data_seek(getFullCurriculum($sid), 0);
                    $full = getFullCurriculum($sid);
                    while($r = mysqli_fetch_assoc($full)) {
                        $check = ($r['status'] == 'Completed') ? "checked" : "";
                        echo "<label><input type='checkbox' name='completed_courses[]' value='{$r['course_code']}' $check> {$r['course_code']} ({$r['credit']} Cr)</label><br>";
                    }
                    ?>
                </div>
            </div>
            <input type="submit" name="update_completed" id="IB1" value="Update My Progress">
        </form>

        <div id="c1">
            <b>Summary:</b> Completed: <?php echo $totalDone; ?> Cr | Remaining: <?php echo $totalLeft; ?> Cr
            <table border="1">
                <tr><th>Status</th><th>Code</th><th>Name</th><th>Credit</th></tr>
                <?php foreach($completed as $c) echo "<tr><td> Complete </td><td>{$c['course_code']}</td><td>{$c['course_name']}</td><td>{$c['credit']}</td></tr>"; ?>
                <?php foreach($remaining as $rem) echo "<tr><td> Upcoming </td><td>{$rem['course_code']}</td><td>{$rem['course_name']}</td><td>{$rem['credit']}</td></tr>"; ?>
            </table>
        </div>

        <form method="post" style="margin-top:20px;">
            <div class="div">Select Courses for Next Semester:
                <div class="course-list">
                    <?php foreach($remaining as $rem) {
                        echo "<label><input type='checkbox' name='reg_courses[]' value='{$rem['course_code']}'> {$rem['course_code']} - {$slots[$rem['course_code']]}</label><br>";
                    } ?>
                </div>
            </div>
            <input type="submit" name="generate_routine" id="IB1" value="Generate Clash-Free Routine" style="background:#f9ad01; color:black;">
        </form>

        <?php if(!empty($routine)): ?>
            <div class="div" style="margin-top:15px;">Generated Routine:
                <?php foreach($routine as $item): ?>
                    <div class="routine-box"><b><?php echo $item['code']; ?></b>: <?php echo $item['time']; ?></div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <p style="color:red;"><?php echo $massage; ?></p>
    </div>
</body>
</html>