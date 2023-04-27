<?php
session_start();

?>
<?php include 'includes/header.php';?>
<?php include '../../includes/functions.php';?>


  <!-- Delete Function-->
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
}else{
    echo "Data does not exist";
}
?>

   
   <?php echo add_user(); ?>


       <!-- Main content -->
       <div class="card-footer clearfix">
        <div class="card-header"></h3>
         <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#adduserModal"><i class="fas fa-plus"></i> Add User</button>
        </div>
       </div>

       <div class="modal fade" role="dialog" id="adduserModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Add User</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form  method="POST">

            <div class="modal-body">
              <div class="form-group">
                <input type="text" name="employee_id" class="form-control" placeholder="Employee_ID">
              </div>

              <div class="form-group">
                <input type="text" name="first_name" class="form-control" placeholder="First name">
              </div>

              
              <div class="form-group">
                <input type="text" name="last_name" class="form-control" placeholder="Last name">
              </div>

              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username">
              </div> 
              
              
              <div class="form-group">
                <input type="text" name="position" class="form-control" placeholder="Position">
              </div> 
              
              <div class="form-input">
							<select name="division" class="form-control">
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
                <input type="email" name="govmail" class="form-control" placeholder="Govmail">
              </div>

              
              <div class="form-group">
                <input type="number" name="contact_number" class="form-control" placeholder="Contact No.">
              </div>

              <div class="form-group">
                <input type="number" name="password" class="form-control" placeholder="Password">
              </div>

              
            <div class="form-input">
							<select name="role" class="form-control">
								<option  id= "role" value="">--Select Role--</option>
									<option value="Supervising Admin">Supervising Admin</option>
									<option value="Motorpool">Motorpool</option>
									<option value="Chief Admin" >Chief Admin</option>
                  <option value="Client" >Client</option>

									
							</select>
						</div><br>

            </div>
          

            <div class="modal-footer">
              <button type="submit" class="btn btn-success" name = "save">Add User</button>
            </div>

          </div>
        </div>
       </div>        

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Employee ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Username</th>
                    <th>Position</th>
                    <th>Division</th>
                    <th>Govmail</th>
                    <th>Contact No.</th>
                    <th>Role</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>

                  <tbody>
                  <?php echo list_user(); ?>
                                   
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
          <?php include 'includes/footer.php';?>

          <script>
$(function(){


  Swal.fire(
  'Good job! Request was Sumitted!',
  'You clicked the button!',
  'success'
)
})


</script>