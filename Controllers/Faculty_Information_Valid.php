<?php
require_once("Authenticationcheck.php");
require_once("../Models/datafaculty.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname=$_POST["fid"];
    $massage2="";
    
    if($fname=="" ){
        $massage="Fill Name";
    }
    else{
        $_SESSION['fa']=$fname;
    }
}
?>