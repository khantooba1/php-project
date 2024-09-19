<?php 

//var_dump($_GET);

include "app_connection.php";
$sid = $_GET['cpid'];
$sql = "DELETE FROM `appointment_info` WHERE cid = $sid";
$result = mysqli_query($conn , $sql);

if($result){
    // echo "RECORD DELETED";
    Header('location: appointmentview.php');
}

?>
