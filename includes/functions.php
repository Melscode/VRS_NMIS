<?php

include 'connection.php';
function list_of_request()
{

    global $conn;

    $sql = mysqli_query($conn, "SELECT * FROM request_tbl");
      while($row = mysqli_fetch_array($sql))
      {
        
          $transaction_id =$row['transaction_id'];
          $requestor_name =$row['requestor_name'];
          $requestor_govmail=$row['requestor_govmail']; 
          $requestor_position=$row['requestor_position'];
          $requestor_division=$row['requestor_division'];
          $requestor_contact_number =$row['requestor_contact_number'];
          $region=$row['region'];
          $location=$row['location'];
          $destination =$row['destination'];
          $start_date =$row['start_date'];
          $end_date =$row['end_date'];
          $start_time =$row['start_time'];
          $end_time =$row['end_time'];
          $purpose =$row['purpose'];
          $travel_order =$row['travel_order'];
          $reservation_status=$row['reservation_status'];
          $assigned_driver=$row['asigned_driver'];

          if($reservation_status == 'Verified')
          {
            $status = "<span class='badge badge-success'>Verified</span>";
          }
          else if($reservation_status == "Approved")
          {
            $status = "<span class='badge badge-success'>Approved</span>";
          } 
          else if($reservation_status == "Pending")
          {
             $status = "<span class='badge badge-warning'>Pending</span>";
          }
          else if ($reservation_status == "Checked")
          {
              $status = "<span class='badge badge-info'>Checked</span>";
          }
          else if ( $reservation_status == "Processing")
          {
              $status = "<span class='badge badge-info'>Processing</span>";
          }
          else{
              $status = "<span class='badge badge-danger'>Canceled</span>";

              }
    
        ?>


      <tr>
          <td><?php echo $transaction_id; ?></td>
          <td><?php echo $requestor_name ; ?></td>
          <td><?php echo $requestor_division; ?></td>
          <td><?php echo $destination; ?></td>
          <td><?php echo $start_date; ?></td>
          <td><?php echo $end_date; ?></td>
          <td><?php echo date('H:i a',strtotime($start_time)); ?></td>
          <td><?php echo date('H:i a',strtotime($end_time)); ?></td>
          <td><?php echo $purpose; ?></td>
          <td><?php echo $assigned_driver; ?></td>
          <td><?php echo $status; ?></td>
          
          <td>
                <form method="POST">
                <input type="hidden" name="transaction_id" value="<?php echo $transaction_id;?>">
                <button type="submit" class="btn btn-primary btn-sm" name="assign_driver">Edit</button>
                </form>
              </td>
                <?php
                    if(isset($_POST['assign_driver'])){
                        session_start();
                        $_SESSION['transaction_id'] = $_POST['transaction_id'];
                        echo"<script>window.location='assigned driver.php'</script>";

                    }
                ?>



            </td>
          
        </tr>

      <?php } ?>




<?php
}

function assign_driver()
{
    global $conn;

    if(isset($_POST['update'])){

  $transaction_id=$_POST['transaction_id'];
  $asigned_driver = $_POST['asigned_driver'];
  $sql1= "UPDATE request_tbl SET asigned_driver = '$asigned_driver' WHERE transaction_id ='$transaction_id'";

  $result =mysqli_query($conn, $sql1);
    if($result){
       echo "<script>alert('Update The Record Successfully!!');</script>"; 
        header('location: ../Motorpool/list of request.php');      
    }else{
        echo "<script>alert('Something went Wrong  Successfully!!');</script>"; 
    }
    
}
}


function all_driver()
{
    global $conn;
  
    $driver = "SELECT * From users_tbl WHERE role = 'Driver'";
    $result = mysqli_query($conn, $driver);

    while($row = mysqli_fetch_array($result)){

        echo '<option value="'.$row['first_name'].' '.$row['last_name'].'">'.$row['first_name'].' '.$row['last_name'].'</option>';
       
    }
}
?>



