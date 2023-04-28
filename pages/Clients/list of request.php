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
            <div class="modal-header">
              <h3 class="modal-title">Send Request</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form  method="POST">

            <div class="modal-body">

              
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