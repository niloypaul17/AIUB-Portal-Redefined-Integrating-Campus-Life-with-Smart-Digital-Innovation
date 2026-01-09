<?php
require_once("Authenticationcheck.php");
require_once("../Models/Course_Book_Reference_check.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $course=$_POST["course"];
    $massage2="";
    
    if($course==""){
        $massage="Fill course name from php";
    }
    else{
        $course=['coursename'=>$course];
        $status=coursecheck($course);
        if($status){
            $massage2='<p style="text-decoration: solid; color:blue">Book website here</p>';
        }
        else{
            $massage2="unsuccessful";
        }
    }
}
?>