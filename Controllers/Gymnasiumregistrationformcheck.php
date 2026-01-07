<?php
session_start();

if (isset($_POST['apply'])) {

    $sid  = $_REQUEST['sid'];
    $name = $_REQUEST['name'];

    if (isset($_REQUEST['gender'])) {
        $gender = $_REQUEST['gender'];
    } else {
        $gender = "";
    }

    if (isset($_FILES['medical'])) {
        $medicalFile = $_FILES['medical']['name'];
    } else {
        $medicalFile = "";
    }

    if ($sid == "" || $name == "" || $gender == "" || $medicalFile == "") {
        echo "All fields are required.";
    }
    else {

        $_SESSION['sid']     = $sid;
        $_SESSION['name']    = $name;
        $_SESSION['gender']  = $gender;
        $_SESSION['medical'] = $medicalFile;

        echo "Gym registration application submitted successfully!<br>";
        echo "Student ID: " . $sid . "<br>";
        echo "Name: " . $name . "<br>";
        echo "Gender: " . $gender . "<br>";

        if ($gender == "Male") {
            echo "Time Slot: Boys Schedule (6:00 AM – 8:00 AM)<br>";
        } else {
            echo "Time Slot: Girls Schedule (4:00 PM – 6:00 PM)<br>";
        }

        echo "Status: Pending Approval";
    }

} else {
    header('location: Gymnasiumregistrationform.php');
}
?>
