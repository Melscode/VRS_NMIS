<?php 

include_once("conn.php");


$transaction_id = $_GET['transaction_id'];
$reservation_status = $_GET['reservation_status'];
$update = "UPDATE request_tbl SET reservation_status='$reservation_status' WHERE transaction_id='$transaction_id'";

mysqli_query($conn, $update);


header('location: ../Motorpool/pages/tables/list of request.php');
?>