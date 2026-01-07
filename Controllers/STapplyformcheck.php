<?php
    session_start();
    require_once('../Models/STapplyformModel.php');
    if(isset($_POST['submit'])){$name = $_REQUEST['name'];$degree = $_REQUEST['degree'];$cgpa = $_REQUEST['cgpa'];$semester = $_REQUEST['semester'];$credits = $_REQUEST['credits'];$experience = $_REQUEST['exp'];$reference = $_REQUEST['reference'];

    if($name == "" || $degree == "" || $cgpa == "" || $semester == "" || $credits == "" || $experience == "" || $reference == "")
    {
        echo "Please fill out all the boxes";
    }
    else if($cgpa < 3.50){
        echo "CGPA must be at least 3.50";
    }
    else if($credits < 90){
        echo "Minimum 90 credits required";
    }
    $STapplication = ['name' => $name,'degree' => $degree,'cgpa' => $cgpa,'semester' => $semester,'credits' => $credits,'experience' => $experience,'reference' => $reference];
    $status = STapply($STapplication);
    if($status){
    header('location: ../Views/Dashboard.php');
    exit;
    }else{
        echo "Failed to submit Student Tutor application";
    }
    }else{
        header('location: ../Views/STapplyform.php');
}
?>
