<?php 

include_once("../Connection/conn.php");

$transaction_id = $_GET['transaction_id'];
$reservation_status = $_GET['reservation_status'];
$update = "UPDATE request_tbl SET reservation_status='$reservation_status' WHERE transaction_id='$transaction_id'";
mysqli_query($conn, $update);
header('location: ../pages/Motorpool/list of request.php');




$transaction ="INSERT INTO transaction_tbl (transaction_id, transaction_description, transaction_date_time)
                Value ('$transaction_id', '$reservation_status', '$transaction_date_time')";
mysqli_query($conn, $transaction);
header('location: ../pages/Motorpool/list of request.php');




$sql = " SELECT * FROM request_tbl Where transaction_id = '$transaction_id";
$result=mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
  header('location: ../pages/Motorpool/assigned driver.php');

?>




