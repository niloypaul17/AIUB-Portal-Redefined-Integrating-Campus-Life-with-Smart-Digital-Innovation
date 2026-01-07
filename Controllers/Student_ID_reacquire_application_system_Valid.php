<?php
require_once("Authenticationcheck.php");
require_once("../Models/Student_ID_reacquire_application_system_check.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $department=$_POST["department"];
    $time=$_POST["date"];

    if($department=="" && empty($time)){
        $massage="Fill all boxs";
    }
    else if($department=="" ){
        $massage="Fill department name";
    }
    else if(empty($time)){
        $massage="Fill time";
    }
    else{
        $student=['department'=>$department,'time'=>$time];
        $status=studentcheck($student);
        if($status){
            $massage2="successfully submitted! TIME: ".$time;
        }
    }
}
?>