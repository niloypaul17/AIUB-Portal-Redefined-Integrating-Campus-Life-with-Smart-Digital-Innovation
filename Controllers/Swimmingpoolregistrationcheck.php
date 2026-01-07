<?php
session_start();

if (isset($_POST['register'])) {

    $name    = $_REQUEST['name'];
    $sid     = $_REQUEST['sid'];
    $dept    = $_REQUEST['dept'];
    $contact = $_REQUEST['contact'];
    $time    = $_REQUEST['time'];

    $morningAvailable   = true;
    $afternoonAvailable = false;
    $eveningAvailable   = true;

    if ($name == "" || $sid == "" || $dept == "" || $contact == "" || $time == "") {
        echo "All fields are required.";
    }
    elseif ($time == "morning" && $morningAvailable == false) {
        echo "Morning slot is not available.";
    }
    elseif ($time == "afternoon" && $afternoonAvailable == false) {
        echo "Afternoon slot is not available.";
    }
    elseif ($time == "evening" && $eveningAvailable == false) {
        echo "Evening slot is not available.";
    }
    else {

        $_SESSION['name']    = $name;
        $_SESSION['sid']     = $sid;
        $_SESSION['dept']    = $dept;
        $_SESSION['contact'] = $contact;
        $_SESSION['time']    = $time;

        echo "Swimming pool registration successful!<br>";
        echo "Name: " . $name . "<br>";
        echo "Student ID: " . $sid . "<br>";
        echo "Department: " . $dept . "<br>";
        echo "Contact No: " . $contact . "<br>";
    }

} else {
    header('location: Swimmingpoolregistration.php');
}
?>
