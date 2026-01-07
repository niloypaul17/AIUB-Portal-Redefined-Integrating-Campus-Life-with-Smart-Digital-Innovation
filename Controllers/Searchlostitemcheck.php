<?php
    session_start();
    require_once('../Models/LostandfoundModel.php');

    if(isset($_POST['search'])){
        $searchitem = $_REQUEST['searchitem'];

        if($searchitem == ""){
            echo "Please enter an item name";
        }
        else{
            $search = [
                'itemname' => $searchitem
            ];

            $result = searchLostItem($search);

            if($result){
                echo "<h3>Item Found</h3>";
                echo "Item Name: ".$result['itemname']."<br>";
                echo "Description: ".$result['itemdescription']."<br>";
                echo "Location: ".$result['locationfound']."<br>";
            }else{
                echo "Item not found";
            }
        }
    }
    else if(isset($_POST['submit'])){
        $description = $_REQUEST['description'];

        if($description == ""){
            echo "Please provide a description";
        }
        else{
            header('location: ../Views/Lost and Found.php');
        }
    }
    else{
        header('location: ../Views/Searchlostitem.php');
    }
?>
