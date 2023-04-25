<?php include 'includes/header.php';?>

   <!-- Main content -->
   <!-- <div class="card-footer clearfix">
    <div class="card-header"></h3>
     <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addrequestModal"><i class="fas fa-plus"></i> Add request</button>
    </div>
   </div>

   <div class="modal fade" role="dialog" id="addrequestModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Add request</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <div class="form-group">
            <input type="text" name="Transaction_ID" class="form-control" placeholder="Transaction_ID">
          </div>

          <div class="form-group">
            <input type="text" name="Fullname" class="form-control" placeholder="Fullname">
          </div>

          <div class="form-group">
            <input type="email" name="Govmail" class="form-control" placeholder="Govmail">
          </div>

          <div class="form-group">
            <input type="text" name="Position" class="form-control" placeholder="Position">
          </div>

          <div class="form-group">
            <input type="text" name="Division" class="form-control" placeholder="Division">
          </div>

          <div class="form-group">
            <input type="number" name="Contact No." class="form-control" placeholder="Contact No.">
          </div>

          <div class="form-group">
            <input type="text" name="Region" class="form-control" placeholder="Region">
          </div>

          <div class="form-group">
            <input type="date" name="Date Start" class="form-control" placeholder="Date Start">
          </div>

          <div class="form-group">
            <input type="date" name="Date End" class="form-control" placeholder="Date End">
          </div>

          <div class="form-group">
            <input type="time" name="Time Start" class="form-control" placeholder="Time Start">
          </div>

          <div class="form-group">
            <input type="time" name="Time End" class="form-control" placeholder="Time End">
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Add request</button>
        </div>

      </div>
    </div>
   </div> -->


   <div class="container-fluid">
            <div class="col-md-12">
              <div class="row">
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
                    <th>Date Start</th>
                    <th>Date End</th>
                    <th>Time Start</th>
                    <th>Time End</th>
                    <th>Purpose</th>
                    <th>Travel Order</th>
                    <th>Assigned</th>
                    <th>Status</th>
                    <th>Action</th>
              
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
                                if($reservation_status == "Initialed")
                                {
                                  echo "
                                  <span class='badge badge-primary'>Initialed</span>
                                  <th>
                                  <a href='../../../Connection/set-status-technical3.php?transaction_id=$transaction_id &reservation_status=Approved' class='btn btn-success btn-sm'>Approve</a>
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