<?php
session_start();

if(isset($_POST['submit'])){

    $name = $_REQUEST['name'];
    $sid  = $_REQUEST['sid'];

    if($name == "" || $sid == ""){
        echo "Need to fill all the fields!";
    }
    else{

        if($_FILES['docs']['name'][0] == ""){
            echo "no file uploaded!";
        }
        else{
            $_SESSION['status'] = true;
            $_SESSION['name'] = $name;
            $_SESSION['sid'] = $sid;

            echo "File uploaded successfully!";
        }
    }

}else{
    header('location: UniversityFileSharingSystem.html');
}
?>
