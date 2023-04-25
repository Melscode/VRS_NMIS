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
    
        ?>


      <tr>
          <th><?php echo $transaction_id; ?></th>
          <th><?php echo $requestor_name ; ?></th>
          <th><?php echo $requestor_govmail; ?></th>
          <th><?php echo $requestor_position; ?></th>
          <th><?php echo $requestor_division; ?></th>
          <th><?php echo $requestor_contact_number; ?></th>
          <th><?php echo $region; ?></th>
          <th><?php echo $location ; ?></th>
          <th><?php echo $destination; ?></th>
          <th><?php echo $start_date; ?></th>
          <th><?php echo $end_date; ?></th>
          <th><?php echo $start_time; ?></th>
          <th><?php echo $end_time; ?></th>
          <th><?php echo $purpose ; ?></th>
          <th><?php echo $travel_order; ?></th>
          <th></th>
       

          <th>
            
            <?php 
              if($reservation_status == "Verified")
              {
                echo "
                <span class='badge badge-success'>Verified</span>
                <th>
                <a href='../../Connection/set-status-technical3.php?transaction_id=$transaction_id &reservation_status=Checked' class='btn btn-info btn-sm'>Check</a>";
                ?>
                <form method="POST">
                <input type="hidden" name="transaction_id" value="<?php echo $transaction_id;?>">
                <button type="submit" class="btn btn-warning btn-sm" name="assign_driver">Assign</button>
                </form>
                <?php
                    if(isset($_POST['assign_driver'])){
                        session_start();
                        $_SESSION['transaction_id'] = $_POST['transaction_id'];
                        echo"<script>window.location='assigned driver.php'</script>";

                    }
                ?>
                </th>
                <?php
                
            
              }
              else if($reservation_status == "Approved")
              {
                echo "
                <span class='badge badge-success'>Approved</span>
                <th>
                
                </th>
                
                ";
            
              } else if($reservation_status == "Pending")
              {
                echo "
                <span class='badge badge-warning'>Pending</span>
                <th>
                  
                </th>
                
                ";
            
              }else if ($reservation_status == "Checked")
              {

                echo "
                <span class='badge badge-info'>Checked</span>
                <th>
                  
                </th>
                
                ";
              }
              
              else if ( $reservation_status == "Processing"){
                echo "
                <span class='badge badge-info'>Processing</span>
                <th>
               
                </th>
                
                ";
            
              }else{

                echo "
                <span class='badge badge-danger'>Canceled</span>
                <th>
               
                </th>
                
                ";

              }

            ?> 

          </th>
          
        </tr>

      <?php } ?>

 </td>
</tr>


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



