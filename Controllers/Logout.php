<?php
    //Rakibul Kabir Khan Logout Page
    setcookie('status', 'true', time()-10, '/');
    header('location: ../Views/Loginpage.php');
?>