<?php
session_start();

if (isset($_POST['postInternship'])) {

    $company = $_REQUEST['company'];
    $dept = $_REQUEST['dept'];
    $details = $_REQUEST['details'];

    if ($company == "" || $dept == "" || $details == "") {
        echo "Please fill all fields.";
    } else {
        $_SESSION['company'] = $company;
        $_SESSION['dept'] = $dept;
        $_SESSION['details'] = $details;

        echo "Internship posted successfully!";
        header('location: Alumniinformationandinternshipfinder.php');
    }

}
elseif (isset($_POST['applyInternship'])) {

    $sid = $_REQUEST['sid'];
    $name = $_REQUEST['sname'];

    if ($sid == "" || $name == "") {
        echo "Null value found! Please enter student details.";
    } else {
        $_SESSION['sid'] = $sid;
        $_SESSION['name'] = $name;

        echo "Application submitted successfully!";
        header('location: Alumniinformationandinternshipfinder.php');
    }

}
else {
    header('location: Alumniinformationandinternshipfinder.php');
}
?>
