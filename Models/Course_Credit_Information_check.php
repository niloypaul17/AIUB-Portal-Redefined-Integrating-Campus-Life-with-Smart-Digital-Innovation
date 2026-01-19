<?php
require_once('Database.php');

function getFullCurriculum($sid) {
    $con = getConnection();
    $sql = "SELECT * FROM course_info WHERE studentid='$sid'";
    return mysqli_query($con, $sql);
}

function updateCourseStatus($sid, $completedCodes) {
    $con = getConnection();
    // Reset all to remaining first
    mysqli_query($con, "UPDATE course_info SET status='Remaining' WHERE studentid='$sid'");
    // Mark specific ones as completed
    if(!empty($completedCodes)) {
        $codes = implode("','", $completedCodes);
        $sql = "UPDATE course_info SET status='Completed' WHERE studentid='$sid' AND course_code IN ('$codes')";
        mysqli_query($con, $sql);
    }
}

function getSlotMapping() {

return [
        "CSC1102" => "Sun-Tue 08:00 AM",
        "CSC1205" => "Sun-Tue 09:30 AM",
        "CSC2108" => "Sun-Tue 11:00 AM",
        "MAT1102" => "Mon-Wed 08:00 AM",
        "CSC3113" => "Mon-Wed 09:30 AM",
        "ENG1101" => "Mon-Wed 11:00 AM"
    ];
}
?>