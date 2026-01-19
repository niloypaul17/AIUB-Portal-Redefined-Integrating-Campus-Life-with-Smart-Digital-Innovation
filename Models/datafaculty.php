<?php
header('Content-Type: application/json');
//require_once('../Controllers/Authenticationcheck.php');
require_once('Database.php');
sleep(5);
function dataa($name){
$con = getConnection();
$data = strtoupper($name);
$sql = "SELECT * FROM faculty_information WHERE facultyname = '{$data}'";
$r = mysqli_query($con, $sql);
if($r && $r->num_rows ==1){
$result=mysqli_fetch_assoc($r);
$f = ['facultyname'=>$result["facultyname"],
      'position'=>$result["position"], 
      'email'=>$result["Email"], 
      'location'=>$result["Location"]];
return json_encode($f);
}
else{
    return json_encode(['error' => 'No faculty information found']);
}
}

if (isset($_POST['faculty'])) {
    $u = json_decode($_POST['faculty'], true);

    if (isset($u['name'])) {
        echo dataa($u['name']);
        exit;
    }
}
?>