<?php 

//var_dump($_GET);

include "app_connection.php";
$cid = $_GET['cid'];
$sql = "DELETE FROM `appointment_info` WHERE cid= $cid";
$result = mysqli_query($conn , $sql);

if($result){
    // echo "RECORD DELETED";
    Header('location: cprofile.php');
}

?>