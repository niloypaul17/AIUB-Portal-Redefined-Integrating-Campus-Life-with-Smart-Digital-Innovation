<?php
require_once("Authenticationcheck.php");
require_once("../Models/faculty_information_check.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname=$_POST["fid"];
    $massage2="";
    
    if($fname=="" ){
        $massage="Fill name from php";
    }
    else{
        $faculty=['facultyname'=>$fname];
        $r=facultycheck($faculty);
        if($r){
        $massage2=$r;
        }
        else{
            $massage2="Invalid Faculty name";
        }
    }
}
?>