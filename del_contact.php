<?php 

//var_dump($_GET);

include "app_connection.php";
$cid = $_GET['cont_del'];
$sql = "DELETE FROM `contact_info` WHERE contact_id= $cid";
$result = mysqli_query($conn , $sql);

if($result){
    // echo "RECORD DELETED";
    Header('location: ccontact.php');
}

?>