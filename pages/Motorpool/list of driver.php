<?php include 'includes/header.php'; ?>
<?php include '../../includes/functions.php';?>

   <?php echo add_user();?>

       <!-- Main content -->
       <div class="card-footer clearfix">
        <div class="card-header"></h3>
         <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addriverModal"><i class="fas fa-plus"></i> Add User</button>
        </div>
       </div>

       <div class="modal fade" role="dialog" id="addriverModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Add Driver</h3>
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
                <input type="text" name="password" class="form-control" placeholder="Password">
              </div>

              
            <div class="form-input">
							<select name="role" class="form-control">
								<option  id= "role" value="Driver">Driver</option>
									
									
									
							</select>
						</div><br>

            </div>
          

            <div class="modal-footer">
              <button type="submit" class="btn btn-success" name = "save">Add Driver</button>
            </div>

          </div>
        </div>
       </div>        

       <div class="container-fluid">
          <div class="col-md-12">
            <div class="row">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Fullname</th>
                    <th>Position</th>
                    <th>Address</th>
                    <th>Division</th>
              
                    
                  </tr>
                  </thead>

                  <tbody>
                  <?php echo add_driver();?>
   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
   <?php include 'includes/footer.php'; ?>
