<?php 

include_once("../Connection/conn.php");

$transaction_id = $_GET['transaction_id'];
$reservation_status = $_GET['reservation_status'];
$update = "UPDATE request_tbl SET reservation_status='$reservation_status' WHERE transaction_id='$transaction_id'";
mysqli_query($conn, $update);
header('location: ../pages/Supervising Admin/list of request.php');
 function getDatetimeNow(){
   //  $time_zone =new DateTimeZone('Brazil/East');
   //  $transaction_date_time= DateTime();
   //  $transaction_date_time -> setTimeZone($time_zone);
   //  return $transaction_date_time -> format ('Y-m-d H:i:s');
 }
$transaction ="INSERT INTO transaction_tbl (transaction_id, transaction_description, transaction_date_time)
                Value ('$transaction_id', '$reservation_status', '$transaction_date_time')";
mysqli_query($conn, $transaction);
header('location: ../pages/Chief admin/list of request.php');
?>


