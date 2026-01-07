<?php
    session_start();
    require_once('../Models/LostandfoundModel.php');
    if(isset($_POST['submit'])){
        $studentid = $_REQUEST['studentid'];
        $itemname = $_REQUEST['itemname'];
        $itemdescription = $_REQUEST['itemdescription'];
        $datefound = $_REQUEST['datefound'];
        $locationfound = $_REQUEST['locationfound'];

        if($studentid == "" || $itemname == "" || $itemdescription == "" || $datefound == "" || $locationfound == ""){
            echo "Please fill up all the fields";
        }
        else{
            $lostItem = ['studentid' => $studentid,'itemname' => $itemname,'itemdescription' => $itemdescription,'datefound' => $datefound,'locationfound' => $locationfound];
            $status = addLostItem($lostItem);
            if($status){
                header('location: ../Views/Lost and Found.php');
            }else{
                echo "Failed to submit report";
            }
        }
    }else{
        header('location: ../Views/Reportlostitem.php');
    }
?>
