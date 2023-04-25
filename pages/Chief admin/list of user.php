<?php  include  'includes/header.php'?>

   
             
              
  <!-- /.card-header -->
  <div class="container-fluid">
            <div class="col-md-12">
              <div class="row">
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
                 
                    
                  </tr>
                  </thead>

                  <tbody>
                    <?php
                     echo list_view_user();
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

          </div>
          <!-- /.col -->
      <?php include 'includes/footer.php' ?>