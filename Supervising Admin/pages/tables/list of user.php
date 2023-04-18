<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List of Users</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../pages/examples/contacts.html" class="nav-link">Contacts</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../pages/examples/faq.html" class="nav-link">FAQs</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.html" class="brand-link">
      <img src="../../dist/img/NMIS_LOGO.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">NMIS_VRS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">Alexander the Great</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="../../index.html" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <!--end dashboard-->
         
          <li class="nav-item">
            <a href="../tables/data.html" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Reports
              </p>
            </a>
          </li>
          <!--end  tables-->
          <li class="nav-item">
            <a href="../../../login form/login.html" class="nav-link">
              <i class="nav-icon far fa-sign-out-alt"></i>
              <p>
                Logout
                
              </p>
            </a>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List of Users</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


  <!-- Delete Function-->
    <?php
if (isset($_GET['employee_id'])) {
include("..\..\..\Connection\conn.php");
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

    <?php
  include "..\..\..\Connection\conn.php";

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
                    <?php
                      require_once '../../../Connection/conn.php';
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

                        echo '<tr>
                        <th scope="row">'.$employee_id.'</th>
                        <td>'.$first_name.'</td>
                        <td>'.$last_name.'</td>
                        <td>'.$username.'</td>
                        <td>'.$position.'</td>
                        <td>'.$division.'</td>
                        <td>'.$govmail.'</td>
                        <td>'.$contact_number.'</td>
                        <td>'.$role.'</td>
                        <td>
                          <a href="list of user.php?employee_id='.$employee_id. '" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                          <button type="button" class="btn btn-warning float-right" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i> Edit </button> 

                        </td>
                        </tr>';
                          }
                        }
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
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2023 <a href="https://nmis.gov.ph">NMIS_VRS</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<!--<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>-->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
