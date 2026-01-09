<?php
    session_start();
    if(isset($_COOKIE['status']) !== true){
        header('location: ../Controllers/Logincheck.php');
    }
    if(!isset($_SESSION["studentid"])){
        header('location: ../Controllers/Logincheck.php');
    }
?>