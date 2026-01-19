<?php
require_once("../Models/Student_ID_application_system_check.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $department=$_POST["department"];
    $time=$_POST["date"];
    $massage2="";

    if($department=="" && empty($time)){
        $massage="Fill All Fields";
    }
    else if($department=="" ){
        $massage="Fill Department Name";
    }
    else if(empty($time)){
        $massage="Fill Date";
    }
    else{
        $student=['department'=>$department,'time'=>$time];
        $status=studentcheck($student);
        if($status){
            $massage2="Successfully Submitted! TIME OF ID LOST: ".$time;
        }
    }
}
?>