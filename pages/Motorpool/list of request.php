<?php include 'includes/header.php'; ?>
 
<?php include "../../includes/functions.php";


 ?> 
 
       <div class="container-fluid">
          <div class="col-md-12">
            <div class="row">
                 <!-- /.card-header -->
                 <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Transaction_ID</th>
                    <th>Fullname</th>
                    <th>Division</th>
                    <th>Destination</th>
                    <th>Date Start</th>
                    <th>Date End</th>
                    <th>Time Start</th>
                    <th>Time End</th>
                    <th>Purpose</th>
                    <th>Driver</th>
                    <th>Status</th>
                    <th>Action</th>
              
                  </tr>
                  </thead>

                  <tbody>
                  <?php echo list_of_request();?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
        
          </div>
          <!-- /.col -->
<?php include 'includes/footer.php'; ?>