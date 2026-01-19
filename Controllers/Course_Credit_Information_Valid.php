<?php
require_once("Authenticationcheck.php");
require_once("../Models/Course_Credit_Information_check.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $credit=$_POST["credit"];
    $department=$_POST["S1"];
    global $massage2;

    function sum($department,$credit,$R){
        $class=['department'=>$department, 'credit'=>$credit];
        $status=classcheck($class);
        if($status){
            $GLOBALS['massage2']='<p style="color: white; font-size:20px">You need to complete more credit: </p>'.$R;
        }
    }
    if($credit=="" && $department==""){
        $massage="Fill All Fields";
    }
    else if($credit==""){
        $massage="Fill Credit";
    }
    else if($department==""){
        $massage="Fill department";
    }
    else{
        if($department=="CSE"){
            $c=149;
            if($credit<0 || $credit>$c){
                $massage="Input valid credit number";
            }
            else{$R=$c-(int)$credit;sum($department,$credit,$R);}
        }
        else if($department=="BBA"){
            $c=140;
            if($credit<0 || $credit>$c){
                $massage="Input valid credit number";
            }
            else{$R=$c-(int)$credit;sum($department,$credit,$R);}
        }
        else if($department=="EEE"){
            $c=148;
            if($credit<0 || $credit>$c){
                $massage="Input valid credit number";
            }
            else{$R=$c-(int)$credit;sum($department,$credit,$R);}
        }
        else if($department=="CoE"){
            $c=147;
            if($credit<0 || $credit>$c){
                $massage="Input valid credit number";
            }
            else{$R=$c-(int)$credit;sum($department,$credit,$R);}
        }
        
    }
    
}
?>