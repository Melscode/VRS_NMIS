<?php include 'includes/header.php'; ?>

    <?php
  include "..\..\Connection\conn.php";

  //Add Function

if(isset($_POST['save'])){


  $employee_id=mysqli_real_escape_string($conn,$_POST['employee_id']);
  $first_name=mysqli_real_escape_string($conn, $_POST['first_name']);
  $last_name=mysqli_real_escape_string($conn, $_POST['last_name']);
  $username=mysqli_real_escape_string($conn, $_POST['username']);
  $position= mysqli_real_escape_string($conn,$_POST['position']);
  $division= mysqli_real_escape_string($conn,$_POST['division']);
  $govmail=mysqli_real_escape_string($conn,$_POST['govmail']);
  $contact_number=mysqli_real_escape_string($conn,$_POST['contact_number']);
  $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
  $role =mysqli_real_escape_string($conn,$_POST['role']);



  $sql = "INSERT INTO users_tbl (employee_id, first_name, last_name, username, position, division, govmail, contact_number, password, role) 

  		  VALUES  ('$employee_id', '$first_name', '$last_name', '$username', '$position', '$division', '$govmail', '$contact_number', '$password', '$role')";
  $result = mysqli_query($conn, $sql);
  if($result){

    echo "<script>alert('SWABE!!');</script>";
    
  }
}
?>

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
                    <th>Action</th>
                    
                  </tr>
                  </thead>

                  <tbody>
                    <?php
                      require_once '../../Connection/conn.php';
                      $sql = mysqli_query($conn, "SELECT * FROM users_tbl");
                      if ($sql){
                          while ($row = mysqli_fetch_assoc($sql)){
                          
                            $employee_id =$row['employee_id'];
                            $first_name =$row['first_name'];
                            $last_name =$row['last_name']; 
                            $username=$row['username'];
                            $position=$row['position'];
                            $division =$row['division'];
                            $govmail =$row['govmail'];
                            $contact_number=$row['contact_number'];
                            $role =$row['role'];

                            if($role=='Driver'){

                              echo '<tr>
                              <th scope="row">'.$first_name.' '.$last_name.'</th>
                              <td>'.$position.'</td> 
                               <td>'.$contact_number.'</td>
                              <td>'.$division.'</td>
                            <td>
                                   <button type="button" class="btn btn-warning float-right" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i> Edit </button>
 
                            </td>
                              </tr>';
                            }
                          }
                        }
                    ?>
                            
                        
                      
                  </tbody>
                </table>
              </div>



              <div class="modal fade" role="dialog" id="editModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h3 class="modal-title">Assign Driver</h3>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                              <div class="form-group">
                                <input type="text" name="Transaction_ID" class="form-control" placeholder="Transaction_ID">
                              </div>

                            <div class="modal-footer">
                              <button type="submit" class="btn btn-success">Edit </button>
                            </div>
                          </div>
                        </div>
                      </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
   <?php include 'includes/footer.php'; ?>
