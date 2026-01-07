<?php
    session_start();
    require_once('../Models/LoginandregistrationModel.php');
    if(isset($_POST['submit'])){
        $studentid = $_REQUEST['studentid'];
        $password = $_REQUEST['password'];

        if($studentid == "" || $password == ""){
            echo "Please insert a Student ID and Password!";
        }else{
            $user = ['studentid'=> $studentid, 'password'=> $password];
            $status = login($user);
            if($status){
                setcookie('status', 'true', time()+3600, '/');
                header('location: ../Views/Dashboard.php');
            }else{
                echo "invalid user!";
            }
        }
    }else{
        header('location: ../Views/Loginpage.php');
    }
?>