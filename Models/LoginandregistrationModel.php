<?php
require_once('Database.php');

function login($user){
    $con = getConnection();
    $sql = "select * from users where studentid='{$user['studentid']}' and password='{$user['password']}'";
    $result = mysqli_query($con, $sql);   
    
    if(mysqli_num_rows($result) == 1){
        return true;
    }else{
        return false;
    }
}

function addUser($user){
    $con = getConnection();
    $sql = "insert into users values('{$user['studentid']}', '{$user['password']}')";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function resetPassword($user){
    $con = getConnection();
    $checkid = "select * from users where studentid='{$user['studentid']}'";
    $checkResult = mysqli_query($con, $checkid);

    if(mysqli_num_rows($checkResult) == 1){
        $sql = "update users set password='{$user['newpassword']}' where studentid='{$user['studentid']}'";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

?>