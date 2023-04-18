<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List of Vehicles</title>

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
          <a href="" class="d-block"><?php echo ['username']; ?></a>
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
            <h1>List of Vehicles</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <div class="card-footer clearfix">
    <div class="card-header"></h3>
     <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addvehicleModal"><i class="fas fa-plus"></i> Add Vehicle</button>
    </div>
   </div>

   <div class="modal fade" role="dialog" id="addvehicleModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Add Vehicle</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
         
          <div class="form-group">
            <input type="text" name="Plate No." class="form-control" placeholder="Plate No." required="required">
          </div>

          <div class="form-group">
            <input type="text" name="Vehicle Model" class="form-control" placeholder="Vehicle Model" required="required">
          </div>

          <div class="form-group">
            <input type="number" name="Start-Odometer" class="form-control" placeholder="Start-Odometer" required="required">
          </div>

          <div class="form-group">
            <input type="number" name="End-Odometer" class="form-control" placeholder="End-Odometer" required="required">
          </div>

          <div class="form-group">
            <input type="text" name="Assigned Driver" class="form-control" placeholder="Assigned Driver" required="required">
          </div>

          <div class="form-group">
            <input type="date" name="Date Assigned" class="form-control" placeholder="Date Assigned" required="required">
          </div>

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Add Vehicle</button>
        </div>

      </div>
    </div>
   </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Plate No.</th>
                    <th>Vehicle Model</th>
                    <th>Start-Odometer</th>
                    <th>End-Odometer</th>
                    <th>Assigned Driver</th>
                    <th>Date Assigned</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>NMIS-977</td>
                    <td>Mazda CX9</td>
                    <td>2486</td>
                    <td>91308</td>
                    <td>Eddie Cascayan</td>
                    <td>April 3, 2023</td>
                    <td>
                      <button type="button" class="btn btn-warning float-md-none" data-toggle="modal" data-target="#editModal"><i class='fa fa-edit'></i></button>

                      <button type="button" class="btn btn-danger float-md-none" data-toggle="modal" data-target="#deleteModal"><i class='fa fa-trash'></i></button>

                      <!-- Delete  -->
                      <div class="modal fade" role="dialog" id="deleteModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h3 class="modal-title">Delete Vehicle</h3>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                              <p>Are you sure you want to delete the vehicle?</p>
                    
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
                              <h3 class="modal-title">Edit Vehicle</h3>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">

                              <div class="form-group">
                                <input type="text" name="Plate No." class="form-control" placeholder="Plate No.">
                              </div>
                    
                              <div class="form-group">
                                <input type="text" name="Vehicle Model" class="form-control" placeholder="Vehicle Model">
                              </div>
                    
                              <div class="form-group">
                                <input type="number" name="Start-Odometer" class="form-control" placeholder="Start-Odometer">
                              </div>
                    
                              <div class="form-group">
                                <input type="number" name="End-Odometer" class="form-control" placeholder="End-Odometer">
                              </div>
                    
                              <div class="form-group">
                                <input type="text" name="Assigned Driver" class="form-control" placeholder="Assigned Driver">
                              </div>
                    
                              <div class="form-group">
                                <input type="date" name="Date Assigned" class="form-control" placeholder="Date Assigned">
                              </div>
                    
                            </div>
                    
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-success">Edit</button>
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
