<?php
session_start();

if (isset($_POST['register'])) {

    $sid = $_REQUEST['sid'];
    $vno = $_REQUEST['vno'];

    if (isset($_REQUEST['type'])) {
        $type = $_REQUEST['type'];
    } else {
        $type = "";
    }

    if ($sid == "" || $vno == "" || $type == "") {
        echo "All fields are required.";
    } else {

        $_SESSION['sid']  = $sid;
        $_SESSION['vno']  = $vno;
        $_SESSION['type'] = $type;

        echo "Parking registration successful!<br>";
        echo "Student ID: " . $sid . "<br>";
        echo "Vehicle No: " . $vno . "<br>";
        echo "Vehicle Type: " . $type;
    }

} else {
    header('location: Carparkingmanagementsystem.php');
}
?>
