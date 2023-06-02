<?php
session_start();
?>
<?php include 'includes/header.php'; ?>
<?php include '../../includes/functions.php';?>

<?php
if (isset($_GET['employee_id'])) {
include("..\..\Connection\conn.php");
$employee_id = $_GET['employee_id'];
$sql = "DELETE FROM users_tbl WHERE employee_id='$employee_id'";
if(mysqli_query($conn,$sql)){
    
    $_SESSION["delete"] = "Deleted Successfully!";
   
}else{
    die("Something went wrong");
}

  
}
?>
  

    <?php
    //  echo add_request(); 
     ?>
<!-- 
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

            <form  method="POST" >

            <div class="modal-body ">
   <div class="row">
    <div class="col-sm">

              <center><h4 class="btn-info">Requester's Information</h4></center>

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
            

                <h6>Are you the Passenger?</h6>
              <div class="form-input">
							<select name="passenger" class="form-control" required>
								<option  value=""></option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
							</select>
						</div><br>

            <center><h4 class= "btn-info">Passenger's Information</h4></center>

            <h6>No. of Passengers :</h6>
            <div class="form-group">
                <input type="number" name="number_of_passenger" class="form-control" placeholder="No." required>
              </div>

              <h6>Name of Passengers :</h6>
            <div class="form-group">
                <input type="text" name="name_of_passenger" class="form-control" placeholder="Name" required>
              </div>

              <h6 >Office (RTOC/Division/Unit/Section) :</h6>
            <div class="form-group">
                <input type="text" name="office" class="form-control" placeholder="Office" required>
              </div>


              <h6>Kilometer Raduis:</h6>
              <div class="form-input">
							<input type="checkbox" id="raduis" name="raduis" value="Within-Manila">
              <label for="raduis">Within-Manila</label><br>
              <input type="checkbox" id="raduis" class="swalDefaultSuccess"  name="raduis" value="Outside-Manila">
              <label for="raduis"> Outside-Manila</label><br>
						</div><br>
</div>
              <div class="col-sm">
              <center><h4 class= "btn-info">Trip Information</h4></center>
              <h6>Source/ Pick up point :</h6>
              <div class="form-group">
                <input type="text" name="pickup_point" class="form-control" placeholder="Pickup Point" required>
              </div>

              <h6>Destenation/ Drop Off Point</h6>
              <div class="form-group">
                <input type="text" name="destination" class="form-control" placeholder="Destination" required>
              </div>
                
              <h6>From: Date of Trip : </h6>
              <div class="form-group">
                <input type="date" name="start_date" class="form-control" placeholder="Start Date" required>
              </div>

               <h6>To: Date of Trip :</h6>
              <div class="form-group">
                <input type="date" name="end_date" class="form-control" placeholder="End Date" required>
              </div>

              <h6>Depature Time :</h6>
              <div class="form-group">
                <input type="time" name="start_time" class="form-control" placeholder="Start Time" required>
              </div>

              <h6>Estimated Return Time : </h6>
              <div class="form-group">
                <input type="time" name="end_time" class="form-control" placeholder="End Time" required>
              </div>

              <h6>Purpose of Trip</h6>
              <div class="form-input">
							<select name="purpose" class="form-control" required>
								<option  value=""></option>
									<option value="Seminar/ Meeting">Seminar/ Meeting</option>
									<option value="Financial Matters">Financial Matters</option>
                  <option value="Skeletal Workforce">Skeletal Workforce</option>
                  <option value="Canvass/ Purchase">Canvas/ Purchase</option>
                  <option value="Enforcement">Enforcement</option>
                  <option value="Monitoring">Monitoring</option> 
                  <option value="others" >Others
                <textarea cols="30" rows="1"></textarea>
                  </option>
                 
                  
							</select>
						  </div><br>
            
              <h6>Attachments: Gate pass/ Locator Travel Order/Notice of Meeting /Memo / Email Invite (if available)</h6>
              <div class="form-group">
                <input type="file" name="travel_order" class="form-control" placeholder="Travel Order">
              </div>

            </div>
          </div>

          
            <div class="modal-footer">
              <button type="submit" class="btn btn-success " name = 'save' > Add Request</button >
            
            </div>
          </div>
        </div>
       </div>        
</div> -->

 
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="btn-info"> Transaction_ID <br><br><br></th>
                    <th class="btn-info">Are you the Passenger?<br><br></th>
                    <th class="btn-info">No. of Passenger<br><br></th>
                    <th class="btn-info">Name of Passenger<br><br></th>
                    <th class="btn-info">Office<br><br><br></th>
                    <th class="btn-info">Raduis<br><br><br></th>
                    <th class="btn-info">Pick up Point<br><br></th>
                    <th class="btn-info">Drop off Point</th>
                    <th class="btn-info">Date Start<br><br></th>
                    <th class="btn-info">Date End<br><br></th>
                    <th class="btn-info">Time Start<br><br></th>
                    <th class="btn-info">Time End<br><br></th>
                    <th class="btn-info">Purpose<br><br><br></th>
                    <th class="btn-info">Attachments<br><br><br></th>
                    <th class="btn-info">Assigned Driver<br><br></th>
                    <th class="btn-info">Feedback<br><br><br></th>
                    <th class="btn-info">Status<br><br><br></th>
                    <th class="btn-info">Action<br><br><br></th>
                    
                  </tr>
                  </thead>

                  <tbody>
                   
                 <?php 
                 echo client_request(); 
                 ?>
                 <?php 
                echo client_request_2(); 
                 ?>
                                   
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


<script>

// function add() {
//     Swal.fire(
//         'Request was  Submitted!',
//         'You clicked the button!',
//         'success'
//     )
// }

function cancel() {
    Swal.fire(
        'Request was  Cancel!',
        'You clicked the button!',
        'error'
    )
}
</script>