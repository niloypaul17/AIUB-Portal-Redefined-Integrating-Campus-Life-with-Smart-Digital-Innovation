<?php
require_once("Authenticationcheck.php");
require_once("../Models/Course_Credit_Information_check.php");

$sid = "22-46872-1"; 
$slots = getSlotMapping();
$massage = "";
$routine = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['update_completed'])) {
        updateCourseStatus($sid, $_POST['completed_courses'] ?? []);
        $massage = "Credit Information Updated Successfully.";
    }

    if(isset($_POST['generate_routine'])) {
        $selectedForReg = $_POST['reg_courses'] ?? [];
        $occupied_slots = [];
        foreach($selectedForReg as $code) {
            $time = $slots[$code];
            if(in_array($time, $occupied_slots)) {
                $massage = "Error: Clash detected at $time!";
                $routine = [];
                break;
            }
            $occupied_slots[] = $time;
            $routine[] = ["code" => $code, "time" => $time];
        }
    }
}

$curriculum = getFullCurriculum($sid);
$completed = []; $remaining = [];
$totalDone = 0; $totalLeft = 0;

while($row = mysqli_fetch_assoc($curriculum)) {
    if($row['status'] == 'Completed') {
        $completed[] = $row;
        $totalDone += $row['credit'];
    } else {
        $remaining[] = $row;
        $totalLeft += $row['credit'];
    }
}
?>