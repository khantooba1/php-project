<?php 

//var_dump($_GET);

include "app_connection.php";
$wid = $_GET['workerid'];
$sql = "DELETE FROM `salon_worker` WHERE wid= $wid";
$result = mysqli_query($conn , $sql);

if($result){
    // echo "RECORD DELETED";
    Header('location: viewworkers.php');
}

?>