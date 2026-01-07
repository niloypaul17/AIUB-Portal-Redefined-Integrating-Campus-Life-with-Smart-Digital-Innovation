<?php
require_once('Database.php');

function addLostItem($lostItem){
    $con = getConnection();
    $sql = "insert into lost_items values('{$lostItem['studentid']}','{$lostItem['itemname']}','{$lostItem['itemdescription']}','{$lostItem['datefound']}','{$lostItem['locationfound']}')";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
    }
function searchLostItem($search){
    $con = getConnection();

    $itemname = mysqli_real_escape_string($con, $search['itemname']);
    $sql = "select * from lost_items where itemname='{$itemname}'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){
        return mysqli_fetch_assoc($result);
    }else{
        return false;
    }
}

?>
