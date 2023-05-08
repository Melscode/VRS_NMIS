<?php 

include_once("../Connection/conn.php");

$transaction_id = $_GET['transaction_id'];
$reservation_status = $_GET['reservation_status'];
$update = "UPDATE request_tbl SET reservation_status='$reservation_status' WHERE transaction_id='$transaction_id'";
$result = mysqli_query($conn, $update);

if($result){
?>
       <li class="step-wizard-item ">
                <span class="progress-count current-item">2</span>
                <span class="progress-label"><span class='btn btn-success'>Successfully Verified!!</span></span>
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count current-item">2</span>
                <span class="progress-label"><span class='btn btn-success'>By:Supervising Admin</span></span>
            </li>

<?php
header('location: ../pages/Supervising Admin/list of request.php');
}
function getDatetimeNow(){
    $time_zone =new DateTimeZone('Asia/Manila');
    $transaction_date_time= DateTime();
    $transaction_date_time -> setTimeZone($time_zone);
    return $transaction_date_time -> format ('Y-m-d H:i:s');
 }
$transaction ="INSERT INTO transaction_tbl (transaction_id, transaction_description, transaction_date_time)
                Value ('$transaction_id', '$reservation_status', '$transaction_date_time')";
mysqli_query($conn, $transaction);

header('location: ../pages/Supervising Admin/list of request.php');

?>