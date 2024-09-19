<?php 

//var_dump($_GET);

include "app_connection.php";
$pid = $_GET['pid'];
$sql = "DELETE FROM `rev_feedback` WHERE pid= $pid";
$result = mysqli_query($conn , $sql);

if($result){
    // echo "RECORD DELETED";
    Header('location: client_feedback.php');
}

?>