<?php
    session_start();
    require_once('../Models/LoginandregistrationModel.php');
    if(isset($_POST['submit'])){
        $studentid = $_REQUEST['studentid'];
        $newpassword = $_REQUEST['newpassword'];
        $confirmpassword = $_REQUEST['confirmpassword'];

        if($studentid == "" || $newpassword == "" || $confirmpassword == ""){
            echo "Please provide Student ID and passwords";
        }
        else{
            if($newpassword != $confirmpassword){
                echo "Passwords do not match";
            }
            else{
                $user = ['studentid'=> $studentid, 'newpassword'=> $newpassword];
                $status = resetPassword($user);
                if($status){
                    header('location: ../Views/Loginpage.php');
                }else{
                    echo "Password reset failed";
                }
            }
        }
    }else{
        header('location: ../Views/Passwordreset.php');
    }
?>
