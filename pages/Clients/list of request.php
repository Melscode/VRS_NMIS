<?php
session_start();
?>
<?php include 'includes/header.php'; ?>
<?php include '../../includes/functions.php';?>
  

    <?php echo add_request(); ?>

    <div class="card-footer clearfix">
        <div class="card-header"></h3>
         <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addrequestModal"><i class="fas fa-plus"></i> Add Request</button>
        </div>
       </div>
       

       <div class="modal fade" role="dialog" id="addrequestModal">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header btn-success">
           <h3 class="modal-title">Add Request</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form  method="POST">

            <div class="modal-body">

              <!-- $_Session['division'] Connect to Login -->
              <center><h4 class="btn-info">Requester's Information</h4><br></center>
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
              
              
              <!-- $_SESSION ['Region'] -->
              <div class="form-group">
                <input type="text" name="region" class="form-control" placeholder="Region">
              </div> 

              <!-- Need lagyan sa database $_SESSSION[Are you the Passenger?] -->
              <div class="form-input">
							<select name="passenger" class="form-control">
								<option  id= "division" value="">--Are you the Passenger?--</option>
									<option value="YES">YES</option>
									<option value="NO">NO</option>
							</select>
						</div><br>
          

            <center><h4 class="btn-info">Passenger's Information </h4><br></center>
              <!-- Need Lagyan sa Database number_of_passenger-->
              <h6>No. of Passengers :</h6>
            <div class="form-group">
                <input type="number" name="number_of_passenger" class="form-control" placeholder="No. of Passengers">
              </div>

              <h6 >Name of Passengers :</h6>
              <div class="form-group">
                <input type="text" name="name_of_passenger" class="form-control" placeholder="Name of Passenger">
              </div>

              <h6>Office (RTOC/Division/Unit/Section) :</h6>
              <div class="form-group">
                <input type="text" name="office" class="form-control" placeholder="Office">
              </div>


              <center><h4 class="btn-info">Trip Information</h4><br></center>
              <h6>Kilometer Raduis :</h6>
              <div class="form-input">
							<select name="raduis" class="form-control">
								<option  id= "division" value="">--Raduis--</option>
									<option value="Within-Manila">Within-Manila</option>
									<option value="Outside-Manila">Outside-Manila</option></option>
							</select>
						</div><br>

              <!-- Source of Pickup -->
              <h6>Source/Pick up point :</h6>
              <div class="form-group">
                <input type="text" name="pickup_point" class="form-control" placeholder="Source/ Pick up point">
              </div>
              <h6>Destination/ Drop off point :</h6>
              <div class="form-group">
                <input type="text" name="destination" class="form-control" placeholder="Destination/Drop off point">
              </div>
              <h6>From: Date of Trip :</h6>
              <div class="form-group">
                <input type="date" name="start_date" class="form-control" placeholder="Start Date">
              </div>
              <h6>To: Date of Trip :</h6>
              <div class="form-group">
                <input type="date" name="end_date" class="form-control" placeholder="End Date">
              </div>
              <h6>Departure Time :</h6>
              <div class="form-group">
                <input type="time" name="start_time" class="form-control" placeholder="Start Time">
              </div>
              <h6>Estimated Return Time:</h6>
              <div class="form-group">
                <input type="time" name="end_time" class="form-control" placeholder="End Time">
              </div>
              <!-- Trip Information -->
              <!-- Purpose of Trip -->
              <h6>Purpose of Trip:</h6>
              <div class="form-input">
							<select name="purpose" class="form-control">
								<option  id= "division" value="">--Select Purpose--</option>
									<option value="Seminar/Meeting">Seminar/Meeting</option>
									<option value="Financial Matters">Financial Matters</option></option>
									<option value="Skeletal Workface">Skeletal Workface</option></option>
									<option value="Canvass/Purchase">Canvass/Purchase</option>
									<option value="Enforcemen">Enforcement</option>
									<option value="Monitoring">Monitoring</option>
									<option value="Other:">Other:</option>
							</select>
						</div><br>
          

            <h6>Attachments: Gate pass/ Locator Travel Order/Notice of Meeting /Memo / Email Invite (if available):</h6>
              <div class="form-group">
                <input type="file" name="travel_order" class="form-control" placeholder="Travel Order">
              </div>

            </div>
          

            <div class="modal-footer">
              <button type="submit" class="btn btn-success add-request" name = 'save' >Add Request</button>
            </div>

          </div>
        </div>
       </div>        
  

 
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="btn-info"> Transaction_ID</th>
                    <th class="btn-info">Are you the Passenger?</th>
                    <th class="btn-info">No. of Passenger</th>
                    <th class="btn-info">Name of Passenger</th>
                    <th class="btn-info">Office</th>
                    <th class="btn-info">Raduis</th>
                    <th class="btn-info">Pick up Point</th>
                    <th class="btn-info">Drop off Point</th>
                    <th class="btn-info">Date Start</th>
                    <th class="btn-info">Date End</th>
                    <th class="btn-info">Time Start</th>
                    <th class="btn-info">Time End :</th>
                    <th class="btn-info">Purpose :</th>
                    <th class="btn-info">Travel Order :</th>
                    <th class="btn-info">Assigned Driver :</th>
                    <th class="btn-info">Status :</th>
                    <th class="btn-info">Action :</th>
                    
                  </tr>
                  </thead>

                  <tbody>
                   
                 <?php client_request(); ?>
                                   
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
<script>
$(function(){

  var division= $('#division').val()

  $('.add-request').click( e=> { 
    $.ajax({
    type : 'POST',
    url : 'list of request.php',
    data: data,
    success : function(res){
    swal.fire({
      title:'Success!',
      icon : 'success',
      html : 'Submitted Request',
      timer : 2000,
    }).then((result)=>{
     if (result.dismiss === Swal.DismissReason.timer) {
      window.location = 'list of request.php';
     }
    })
  }, error : function(resp){

  }
})

  })
})


</script>