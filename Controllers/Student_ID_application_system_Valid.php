<?php
require_once("../Models/Student_ID_application_system_check.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $department=$_POST["department"];
    $time=$_POST["date"];
    $massage2="";

    if($department=="" && empty($time)){
        $massage="Fill all boxs from php";
    }
    else if($department=="" ){
        $massage="Fill department name from php";
    }
    else if(empty($time)){
        $massage="Fill time from php";
    }
    else{
        $student=['department'=>$department,'time'=>$time];
        $status=studentcheck($student);
        if($status){
            $massage2="successfully submitted! TIME OF LOST: ".$time;
        }
    }
}
?>