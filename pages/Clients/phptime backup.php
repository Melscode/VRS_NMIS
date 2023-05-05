<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tracking</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- AdminLTE css -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
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
      <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="../../pages/examples/projects.html" class="nav-link">Projects</a>
      </li>-->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="../mailbox/mailbox.html" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
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
               <br /> with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../../index.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         <!--end dashboard-->
         <li class="nav-item ">
          <a href="../calendar.html" class="nav-link ">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Calendar
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li>

          <li class="nav-item menu-open">
            <a href="../UI/timeline.html" class="nav-link active">
              <i class="nav-icon fas fa-project-diagram"></i>
              <p>
                Tracking
              </p>
            </a>
          </li>
          <!--end UI-->
         
          <li class="nav-item">
            <a href="../../../login form/login.html" class="nav-link">
              <i class="nav-icon far fa-sign-out"></i>
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
            <h1>Tracking Status</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form method="POST" >
        <div class="input-group mb-3">
         <input type="text" class="form-control" placeholder="Transaction_ID" name="transaction_id"  required>
          <div class="input-group-append">
            <button type></button>
            <div class="input-group-text">
            <!--  <span class="fas fa-user"></span>-->
            </div>
          </div>
        </div>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-success">  
                <?php 
                
                $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');
                $sql = mysqli_query($conn, 'SELECT * FROM request_tbl');
                if($sql){
                  while ($row = mysqli_fetch_array($sql)){
                   
                    echo  "Todays ".date("Y-m-d");
                  }

                  echo "</tr>";
                }else{
                    echo "<td>".$row['start_date'];
                  }
                ?></span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-check bg-info"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 10:09 AM</span>
                  <h3 class="timeline-header"><a href="#">
                  
                  <tr>
                 <th>
                  <?php
                      require_once '../../../Connection/conn.php';
                      $sql = mysqli_query($conn, "SELECT reservation_status FROM request_tbl");
                     
                      while($result = mysqli_fetch_array($sql))
                      {
                        
                            if($result['reservation_status'] == "Approved"){
                                
                                  echo "
                                  <span class='badge badge-success'>Approve</span>
                                  <th>
                                  </th>
                                  
                                  ";
                                  
                                  
                                 } else{

                                  
                                  echo "
                                  <span class='badge badge-info'>Procc</span>
                                  <th>
                                  </th>
                                  
                                  ";

                          
                                 }
                                }
                              ?> 
                   </tr></th>  

                  </a>
                  <?php 
                      ?>
                </h3>

                  <!--<div class="timeline-body">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                    quora plaxo ideeli hulu weebly balihoo...
                  </div>
                  <div class="timeline-footer">
                    <a class="btn btn-primary btn-sm">Read more</a>
                    <a class="btn btn-danger btn-sm">Delete</a>
                  </div>-->
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div class="time-label">
                <span class="bg-success">March 28 2023</span>
              </div>
              <div>
                <i class="fas fa-check bg-green"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 1:00 PM</span>
                  <!-- <h3 class="timeline-header no-border"><a href="#"></a> Supervising Admin Verified your request</h3> -->
                </div>
              </div>

              <div>
                <i class="fas fa-times bg-danger"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 1:00 PM</span>
                  <!-- <h3 class="timeline-header no-border"><a href="#"></a> Supervising Admin Rejected your request</h3> -->
                </div>
              </div>

              <div>
                <i class="fas fa-spinner bg-warning"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 1:00 PM</span>
                  <!-- <h3 class="timeline-header no-border"><a href="#"></a> Supervising Admin verifying your request</h3> -->
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div class="time-label">
                <span class="bg-success">March 28 2023</span>
              </div>
              <div>
                <i class="fas fa-check bg-success"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                  <!-- <h3 class="timeline-header"><a href="#"></a> Vehicle and Driver Already Assigned</h3> -->
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-green">March 29 2023</span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-check bg-success"></i>

                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 10:05 AM</span>

                  <h3 class="timeline-header"><a href="#"></a> Chief Admin Approved your request</h3>

                </div>
              </div>
              <!-- END timeline item -->
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.timeline -->

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
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>













<?php 
                
                if(isset($_POST['test']))
                {
                  $transaction_id = $_POST['transaction_id'];
                  $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');
                  $sql = mysqli_query($conn, "SELECT * FROM request_tbl  WHERE transaction_id ='$transaction_id'");

                  while($result = mysqli_fetch_array($sql))
                  {
                    
                        if($result['reservation_status'] == "Approved"){
                            
                              echo "
                              <span class=''>Approved</span>
                              <th>
                              </th>
                              
                              ";
                              
                              
                             }else if($result['reservation_status'] == "Pending") 
                             
                             {

                              echo "
                              <span class=''>Pending</span>
                              <th>
                              </th>
                              
                              ";

                             }else   if($result['reservation_status'] == "Canceled")
                             
                             {
                              echo "
                              <span class=''>Cancelled</span>
                              <th>
                              </th>
                              
                              ";

                             }
                             
                             
                             
                             else{

                              
                              echo "
                              <span class=''>Empty</span>
                              <th>
                              </th>
                              
                              ";

                      
                             }
                            }
                          }

                ?>











//






   
<form method="POST" >
        <div class="input-group mb-3">
         <input type="text" class="form-control" placeholder="Transaction_ID" name="transaction_id"  required>
          <div class="input-group-append">
            <div class="input-group-text">
              <button type="submit" name="test" class =""><i class="fas fa-search"></i>  Search</button>
            <!--  <span class="fas fa-user"></span>-->
            </div>
          </div>
        </div>