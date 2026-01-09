<?php
require_once("Authenticationcheck.php");
require_once("../Models/class_routine_and_course_generator_check.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $credit=$_POST["credit"];
    $department=$_POST["S1"];
    $id=$_POST["ID"];
    $R=149-(int)$credit;
    $massage2="";

    if($credit=="" && $department=="" && $id==""){
        $massage="Fill every box from php";
    }
    else if($credit=="" && $department==""){
        $massage="Fill credit and department from php";
    }
    else if($id==""&& $department==""){
        $massage="Fill id and department from php";
    }
    else if($id==""&& $credit==""){
        $massage="Fill id and credit from php";
    }
    else if($credit==""){
        $massage="Fill credit from php";
    }
    else if($id==""){
        $massage="Fill id from php";
    }
    else if($department==""){
        $massage="Fill depertment from php";
    }
    else{
        $class=['ID'=>$id, 'department'=>$department, 'credit'=>$credit];
        $status=classcheck($class);
        if($status){
            $massage2='<p style="color: green; font-size:20px">You need to complete more credit: </p>'.$R;
        }
    }
}
?>