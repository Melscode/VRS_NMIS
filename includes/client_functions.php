<?php
include 'connection.php';

// Client List of Request
function client_list_request(){
    global $conn;
    if(isset($_POST['update_request']))
    {
        session_start();
        $_SESSION['transaction_id'] =$_POST['transaction_id'];
        $transaction_id = $_SESSION['transaction'];

        $sql = "SELECT * FROM request_tbl  WHERE transaction_id ='$transaction_id'";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($result))
        {
        $transaction_id = $row['transaction_id'];
        $passenger = $row['passenger'];
        $number_of_passenger = $row['number_of_passenger'];
        $name_of_passenger = $row['name_of_passenger'];
        $office = $row['office'];
        $raduis = $row['raduis'];
        $pickup_point = $row['pickup_point'];
        $destination = $row['destination'];
        $start_date = $row['start_date'];
        $end_date = $row['end_date'];
        $start_time = $row['start_time'];
        $purpose = $row['purpose'];
        $travel_order = $row['travel_order'];



        }

        
        
        
    }

}

function my_list_request(){
    global $conn;

    $sql =mysqli_query ($conn,   "SELECT Null FROM request_tbl");
    


}




?>

