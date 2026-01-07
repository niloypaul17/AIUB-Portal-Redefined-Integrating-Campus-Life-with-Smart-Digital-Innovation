<?php
require_once("Authenticationcheck.php");
require_once("../Models/faculty_information_check.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fid=$_POST["fid"];
    $department=$_POST["S1"];
    
    if($fid=="" && $department==""){
        $massage="Fill every box";
    }
    else if($fid=="" ){
        $massage="Fill name";
    }
    else if($department=="" ){
        $massage="Fill department";
    }
    else{
        $faculty=['facultyID'=>$fid,'department'=>$department];
        $status=facultycheck($faculty);
        if($status){
            $massage2="successful";
        }
    }
}
?>