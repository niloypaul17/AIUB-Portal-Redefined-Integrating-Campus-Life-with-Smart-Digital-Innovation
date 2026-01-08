<?php
//Check Student ID Page
require_once('../Models/LoginandregistrationModel.php');

$data = $_POST['user'];
$user = json_decode($data, true);

$con = getConnection();
$sql = "select * from users where studentid='{$user['studentid']}'";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) == 1){
    echo json_encode(['status'=>'exists']);
}else{
    echo json_encode(['status'=>'available']);
}
?>
