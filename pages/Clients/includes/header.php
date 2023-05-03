<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List of Drivers</title>
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

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
   <!-- fullcalendar -->
 <link rel="stylesheet" href="../../plugins/fullcalendar/main.css">
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
            <a href="clientdashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

            

          

        

          <li class="nav-item">
            <a href="timeline.php" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>
                Tracking 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../../index.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out"></i>
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
            <h1>NMIS Vehicle Reservation System</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



  

<div class="modal fade" role="dialog" id="addrequestModal">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header btn-success">
    <h3 class="modal-title">Add Request</h3>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>

  <form  method="POST">

  <div class="modal-body">

    <h4 class="btn-info">Requester's Information</h4>

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

      <h6>Are you the Passenger?</h6>
    <div class="form-input">
    <select name="passenger" class="form-control">
      <option  value=""></option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
  </div><br>

  <h4 class= "btn-info">Passenger's Information</h4>

  <h6>No. of Passengers :</h6>
  <div class="form-group">
      <input type="number" name="number_of_passenger" class="form-control" placeholder="No.">
    </div>

    <h6>Name of Passengers :</h6>
  <div class="form-group">
      <input type="text" name="name_of_passenger" class="form-control" placeholder="Name">
    </div>

    <h6 >Office (RTOC/Division/Unit/Section) :</h6>
  <div class="form-group">
      <input type="text" name="office" class="form-control" placeholder="Office">
    </div>


    <h6>KIlometer Raduis:</h6>
    <div class="form-input">
    <select name="raduis" class="form-control">
      <option  value=""></option>
        <option value="Within-Manila">Within Manila</option>
        <option value="Outside-manila"> Outside Manila</option>
    </select>
  </div><br>

    <div class="col">
    <h4 class= "btn-info">Trip Information</h4>
    <h6>Source/ Pick up point :</h6>
    <div class="form-group">
      <input type="text" name="pickup_point" class="form-control" placeholder="Pickup Point">
    </div>

    <h6>Destenation/ Drop Off Point</h6>
    <div class="form-group">
      <input type="text" name="destination" class="form-control" placeholder="Destination">
    </div>
      
    <h6>From: Date of Trip : </h6>
    <div class="form-group">
      <input type="date" name="start_date" class="form-control" placeholder="Start Date">
    </div>

     <h6>To: Date of Trip :</h6>
    <div class="form-group">
      <input type="date" name="end_date" class="form-control" placeholder="End Date">
    </div>

    <h6>Depature Time :</h6>
    <div class="form-group">
      <input type="time" name="start_time" class="form-control" placeholder="Start Time">
    </div>

    <h6>Estimated Return Time</h6>
    <div class="form-group">
      <input type="time" name="end_time" class="form-control" placeholder="End Time">
    </div>

    <h6>Purpose of Trip</h6>
    <div class="form-input">
    <select name="purpose" class="form-control">
      <option  value=""></option>
        <option value="Seminar/ Meeting">Seminar/ Meeting</option>
        <option value="Financial Matters">Financial Matters</option>
        <option value="Skeletal Workforce">Skeletal Workforce</option>
        <option value="Canvass/ Purchase">Canvass/ Purchase</option>
        <option value="Enforcement">Enforcement</option>
        <option value="Monitoring">Monitoring</option> 
        <option value="others">Others</option> 
    </select>
    </div><br>
  
    <h6>Attachments: Gate pass/ Locator Travel Order/Notice of Meeting /Memo / Email Invite (if available)</h6>
    <div class="form-group">
      <input type="file" name="travel_order" class="form-control" placeholder="Travel Order">
    </div>

  </div>
</div>

  <div class="modal-footer">
    <button type="submit" class="btn btn-success add-request" name = 'save' >Add Request</button>
  </div>

</div>
</div>
</div>        

