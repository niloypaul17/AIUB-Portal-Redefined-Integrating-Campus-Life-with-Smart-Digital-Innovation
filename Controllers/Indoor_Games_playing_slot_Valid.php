<?php
require_once("Authenticationcheck.php");
require_once("../Models/Indoor_Games_playing_slot_check.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $gamename=$_POST["S1"];
    $time=$_POST["S2"];
    $massage2="";
    
    if($gamename=="" && $time==""){
        $massage="Fill every box from php";
    }
    else{
        $game=['gamename'=>$gamename,'time'=>$time];
        $status=gamecheck($game);
        if($status){
            $massage2="Successfully registered! GAME NAME: ".$gamename." TIME: ".$time;
        }
    }
}
?>