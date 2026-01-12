<?php
require_once('../Controllers/Authenticationcheck.php');
require_once('Database.php');

$con = getConnection();
$data = "MD. AL-AMIN";
$sql = "SELECT * FROM faculty_information WHERE facultyname = '{$data}'";
$r = mysqli_query($con, $sql); 
$result=mysqli_fetch_assoc($r);
$f = ['facultyname'=>$result["facultyname"], 'position'=>$result["position"], 'email'=>$result["Email"], 'location'=>$result["Location"]];
echo json_encode($f);
?>