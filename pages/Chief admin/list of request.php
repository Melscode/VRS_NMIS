<?php include 'includes/header.php';?>
<?php include '../../includes/functions.php';?>


   <div class="container-fluid">
            <div class="col-md-12">
              <div class="row">
                 <!-- /.card-header -->
                 <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th class="btn-info">Transaction_ID</th>
                    <th class="btn-info">Fullname</th>
                    <th class="btn-info"> Are you the Passenger?</th>
                    <th class="btn-info"> No. of Passenger</th>
                    <th class="btn-info"> Name of Passenger</th>
                    <th class="btn-info"> Office</th>
                    <th class="btn-info"> Raduis</th>
                    <th class="btn-info"> Pick up Point</th>
                    <th class="btn-info"> Drop off Point</th>
                    <th class="btn-info"> Date Start</th>
                    <th class="btn-info"> Date End</th>
                    <th class="btn-info"> Time Start</th>
                    <th class="btn-info"> Time End :</th>
                    <th class="btn-info"> Purpose :</th>
                    <th class="btn-info"> Travel Order :</th>
                    <th class="btn-info"> Assigned Driver :</th>
                    <th class="btn-info"> Status :</th>
                    <th class="btn-info"> Action :</th>
              
                  </tr>
                  </thead>

                  <tbody>
                  <?php
                      require_once '../../Connection/conn.php';
                      $sql = mysqli_query($conn, "SELECT * FROM request_tbl WHERE reservation_status ='Initialed'");
                        while($row = mysqli_fetch_array($sql))
                        {
                          
                         
                          $transaction_id =$row['transaction_id'];
                          $requestor_name =$row['requestor_name'];
                          $requestor_govmail=$row['requestor_govmail']; 
                          $requestor_position=$row['requestor_position'];
                          $requestor_division=$row['requestor_division'];
                          $requestor_contact_number =$row['requestor_contact_number'];
                          $region=$row['region'];
                          $passenger =$row['passenger'];
                          $number_of_passenger=$row['number_of_passenger'];
                          $name_of_passenger =$row['name_of_passenger'];
                          $office =$row ['office'];
                          $raduis =$row['raduis'];
                          $pickup_point=$row['pickup_point'];
                          $destination =$row['destination'];
                          $start_date =$row['start_date'];
                          $end_date =$row['end_date'];
                          $start_time =$row['start_time'];
                          $end_time =$row['end_time'];
                          $purpose =$row['purpose'];
                          $travel_order =$row['travel_order'];
                          $asigned_driver =$row['asigned_driver'];
                          $reservation_status=$row['reservation_status'];
                                            
                          ?>
                          <tr>
                          <th><?php echo $transaction_id; ?></th>
                          <th><?php echo $requestor_name ; ?></th>
                          <th><?php echo $passenger ; ?></th>
                          <th><?php echo $number_of_passenger; ?></th>
                          <th><?php echo $name_of_passenger; ?></th>
                          <th><?php echo $office; ?></th>
                          <th><?php echo $raduis; ?></th>
                          <th><?php echo $pickup_point; ?></th>
                          <th><?php echo $destination; ?></th>
                          <th><?php echo $start_date; ?></th>
                          <th><?php echo $end_date; ?></th>
                          <th><?php echo date('h:i a',strtotime($start_time)); ?></th>
                          <th><?php echo date('h:i a',strtotime($end_time));$end_time; ?></th>
                          <th><?php echo $purpose ; ?></th>
                          <th><?php echo $travel_order; ?></th>
                          <th><?php echo $asigned_driver; ?></th>
                          <th>
  
                  <?php 
                    if($reservation_status == "Initialed")
                    {
                      echo "
                      <span class='badge badge-primary'>Initialed</span>
                      <th>
                      <a href='../../Connection/set-status-technical4.php?transaction_id=$transaction_id &reservation_status=Approved' class='btn btn-success btn-sm'>Approve</a>
                      </th>
                      
                      ";
                  
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
                  
                    }else
                    {
                      echo "
                      <span class='badge badge-info'>Processing</span>
                      <th>
                        
                      </th>
                      
                      ";
                  
                    }

                  ?> 

                </th>
                
                
              </tr>

            <?php }?>
                                  
            
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  <?php include 'includes/footer.php'; ?>