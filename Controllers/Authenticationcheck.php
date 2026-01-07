<?php
    //Rakibul Kabir Khan Authenticationcheck Page
    session_start();
    if(isset($_COOKIE['status']) !== true){
        header('location: ../Controllers/Logincheck.php');
    }
?>