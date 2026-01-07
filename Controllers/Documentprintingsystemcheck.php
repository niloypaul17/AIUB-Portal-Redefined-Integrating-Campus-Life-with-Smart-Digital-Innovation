<?php
session_start();

if (isset($_POST['submit'])) {

    $name = $_REQUEST['name'];
    $sid  = $_REQUEST['sid'];

    if (isset($_FILES['doc'])) {
        $docName = $_FILES['doc']['name'];
    } else {
        $docName = "";
    }

    if ($name == "" || $sid == "" || $docName == "") {
        echo "All fields are required.";
    }
    else {
        $_SESSION['name'] = $name;
        $_SESSION['sid']  = $sid;
        $_SESSION['doc']  = $docName;

        echo "Document is ready for printing!<br>";
        echo "Name: " . $name . "<br>";
        echo "Student ID: " . $sid . "<br>";
        echo "Uploaded File: " . $docName;
    }

} else {
    header('location: Documentprintingsystem.php');
}
?>
