<?php
require_once("Authenticationcheck.php");
require_once("../Models/Course_Book_Reference_check.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $course=$_POST["course"];
    
    if($course==""){
        $massage="Fill course name";
    }
    else{
        $course=['coursename'=>$course];
        $status=coursecheck($course);
        if($status){
            $massage2="successful";
        }
    }
}
?>