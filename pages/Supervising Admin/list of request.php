<?php include 'includes/header.php';?>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Transaction_ID</th>
                    <th>Fullname</th>
                    <th>Govmail</th>
                    <th>Position</th>
                    <th>Division</th>
                    <th>Contact No.</th>
                    <th>Region</th>
                    <th>Location</th>
                    <th>Destination</th>
                    <th>Date Start :</th>
                    <th>Date End :</th>
                    <th>Time Start :</th>
                    <th>Time End :</th>
                    <th>Purpose :</th>
                    <th>Travel Order :</th>
                    <th>Assigned Driver :</th>
                    <th>Status :</th>
                    <th>Action :</th>
              
                  </tr>
                  </thead>

                  <tbody>
                  <?php
                      require_once '../../Connection/conn.php';
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
                            $asigned_driver =$row['asigned_driver'];
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
                            <th><?php echo $asigned_driver; ?></th>
                         

                            <th>
                              
                              <?php 
                                if($reservation_status == "Verified")
                                {
                                  echo "
                                  <span class='badge badge-success'>Verified</span>
                                  <th>
                                  <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Canceled' class='btn btn-danger btn-sm'>Cancel</a>
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
                              
                                }else if ($reservation_status == "Checked")
                                {

                                  echo "
                                  <span class='badge badge-info'>Checked</span>
                                  <th>
                                   <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Initialed ' class='btn btn-warning btn-sm'>Initial</a>
                                  </th>
                                  
                                  ";
                                }else if ($reservation_status == "Initialed")
                                {

                                  echo "
                                  <span class='badge badge-primary'>Initialed</span>
                                  <th>
                                  <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Canceled' class='btn btn-danger btn-sm'>Cancel</a>
                                  </th>
                                  
                                  ";
                                }
                                
                                else if ($reservation_status == 'Canceled')
                                {
                                  echo "
                                  <span class='badge badge-danger'>Canceled</span>
                                  <th>
                                
                                  </th>
                                  
                                  ";
                              
                                }else
                                {
                                  echo "
                                  <span class='badge badge-info'>Processing</span>
                                  <th>
                                  <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Verified' class='btn btn-success btn-sm'>Verify</a>
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
            <!-- /.card -->
          </div>

 <?php include 'includes/footer.php';?>