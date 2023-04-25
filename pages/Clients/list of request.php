<?php
session_start();

?>
<?php include 'includes/header.php'; ?>
  

    <?php
  include "..\..\Connection\conn.php";

  //Add Function

if(isset($_POST['save'])){


  $transaction_id=mysqli_real_escape_string($conn,$_POST['transaction_id']);
  $requestor_name=mysqli_real_escape_string($conn, $_POST['requestor_name']);
  $requestor_govmail=mysqli_real_escape_string($conn, $_POST['requestor_govmail']);
  $requestor_position=mysqli_real_escape_string($conn, $_POST['requestor_position']);
  $requestor_division= mysqli_real_escape_string($conn,$_POST['requestor_division']);
  $requestor_contact_number= mysqli_real_escape_string($conn,$_POST['requestor_contact_number']);
  $region=mysqli_real_escape_string($conn,$_POST['region']);
  $location=mysqli_real_escape_string($conn,$_POST['location']);
  $destination =mysqli_real_escape_string($conn,$_POST['destination']);
  $start_date=mysqli_real_escape_string($conn,$_POST['start_date']);
  $end_date=mysqli_real_escape_string($conn, $_POST['end_date']);
  $start_time=mysqli_real_escape_string($conn, $_POST['start_time']);
  $end_time=mysqli_real_escape_string($conn, $_POST['end_time']);
  $purpose= mysqli_real_escape_string($conn,$_POST['purpose']);
  $travel_order= mysqli_real_escape_string($conn,$_POST['travel_order']);
 
 



  $sql = "INSERT INTO request_tbl (transaction_id, requestor_name, requestor_govmail, requestor_position, requestor_division, requestor_contact_number, region, location, destination, start_date, end_date, start_time, end_time, purpose, travel_order) 

  		  VALUES  ('$transaction_id', '$requestor_name', '$requestor_govmail', '$requestor_position', '$requestor_division', '$requestor_contact_number', '$region', '$location', '$destination', '$start_date', '$end_date', '$start_time', '$end_time', '$purpose', '$travel_order')";
  $result = mysqli_query($conn, $sql);
  if($result){



    echo "<script>alert('SWABE!!');</script>";
  }
}
?>


<div class="card-footer clearfix">
        <div class="card-header"></h3>
         <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addrequestModal"><i class="fas fa-plus"></i> Add Request</button>
        </div>
       </div>

       <div class="modal fade" role="dialog" id="addrequestModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Add User</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form  method="POST">

            <div class="modal-body">
              <div class="form-group">
                <input type="text" name="transaction_id" class="form-control" placeholder="Transaction ID">
              </div>

              <div class="form-group">
                <input type="text" name="requestor_name" class="form-control" placeholder="Fullname">
              </div>

              
              <div class="form-group">
                <input type="email" name="requestor_govmail" class="form-control" placeholder="Govmail">
              </div>

              <div class="form-group">
                <input type="text" name="requestor_position" class="form-control" placeholder="Position">
              </div> 
              
              <div class="form-input">
							<select name="requestor_division" class="form-control">
								<option  id= "division" value="">--Select Division--</option>
									<option value="Laboratory">Laboratory</option>
									<option value="POSMD">POSMD</option>
									<option value="MIED" >MIED</option>
									<option value="Cashier">Cashier</option>
									<option value="Engineering">Engineering</option>
									<option value="ARD">ARD</option>
									<option value="Property">Property</option>
									<option value="Records">Records</option>
									<option value="OED">OED</option>
									<option value="HRM">HRM</option>
									<option value="PIMD">PIMD</option>
									<option value="Admin">Admin</option>
									<option value="BAC">BAC</option>
									<option value="Accounting">Accounting</option>
							</select>
						</div><br>

              <div class="form-group">
                <input type="text" name="requestor_contact_number" class="form-control" placeholder="Contact Number">
              </div> 
              
              

              <div class="form-group">
                <input type="text" name="region" class="form-control" placeholder="Region">
              </div>

              
              <div class="form-group">
                <input type="text" name="location" class="form-control" placeholder="Location">
              </div>

              <div class="form-group">
                <input type="text" name="destination" class="form-control" placeholder="Destination">
              </div>

              <div class="form-group">
                <input type="date" name="start_date" class="form-control" placeholder="Start Date">
              </div>

              <div class="form-group">
                <input type="date" name="end_date" class="form-control" placeholder="End Date">
              </div>

              <div class="form-group">
                <input type="time" name="start_time" class="form-control" placeholder="Start Time">
              </div>

              <div class="form-group">
                <input type="time" name="end_time" class="form-control" placeholder="End Time">
              </div>

              <div class="form-group">
                <input type="text" name="purpose" class="form-control" placeholder="Purpose">
              </div>


              <div class="form-group">
                <input type="text" name="travel_order" class="form-control" placeholder="Travel Order">
              </div>

            </div>
          

            <div class="modal-footer">
              <button type="submit" class="btn btn-success" name = 'save' >Add Request</button>
            </div>

          </div>
        </div>
       </div>        

 
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
                            <th><?php echo date('h:i a',strtotime($start_time)); ?></th>
                            <th><?php echo $end_time; ?></th>
                            <th><?php echo $purpose ; ?></th>
                            <th><?php echo $travel_order; ?></th>
                            <th><?php echo $asigned_driver; ?></th>

                         

                            <th>
                              
                              <?php 
                                if($reservation_status == "Initialled")
                                {
                                  echo "
                                  <span class='badge badge-primary'>Initialed</span>
                                  <th>
                                  <a href='../../Connection/set-status-technical3.php?transaction_id=$transaction_id &reservation_status=Approved' class='btn btn-success btn-sm'>Approve</a>
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
                                   
                        <!-- Delete  -->
                        <div class="modal fade" role="dialog" id="deleteModal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title">Delete Request</h3>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
  
                              <div class="modal-body">
                                <p>Are you sure you want to delete the user?</p>
                      
                              </div>
                      
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </div>
                            </div>
                          </div>
                        </div>
                                        <!-- EDIT  -->
                        <div class="modal fade" role="dialog" id="editModal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title">Edit Request</h3>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
  
                              <div class="modal-body">
                                <div class="form-group">
                                  <input type="text" name="Employee_ID" class="form-control" placeholder="Employee_ID">
                                </div>
                  
                                <div class="form-group">
                                  <input type="text" name="Fullname" class="form-control" placeholder="Fullname">
                                </div>
                  
                                <div class="form-group">
                                  <input type="text" name="Username" class="form-control" placeholder="Username">
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
                                  <input type="text" name="Role" class="form-control" placeholder="Role">
                                </div>
                              </div>
                      
                              <div class="modal-footer">
                                <button type="submit" name = "adduser" class="btn btn-success">Edit</button>
                              </div>
                            </div>
                          </div>
                        </div>
  
                     </td>
                    </tr>
                  </tbody>
  

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <?php include 'includes/footer.php'; ?>