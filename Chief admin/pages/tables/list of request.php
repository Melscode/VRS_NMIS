<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List of Requests</title>

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
          <a href="../examples/profile.html" class="d-block">Alexander the Great</a>
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
          <li class="nav-item">
            <a href="../../chiefadmindashboard.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../../Connection/logout.php" class="nav-link">
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
            <h1>List of Requests</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

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
                    <th>Status</th>
                    <th>Action</th>
              
                  </tr>
                  </thead>

                  <tbody>
                  <?php
                      require_once '../../../Connection/conn.php';
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
