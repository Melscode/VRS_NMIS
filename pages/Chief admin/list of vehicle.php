<?php  include  'includes/header.php'?>
<?php include "../../includes/functions.php";?>

    <!-- Main content -->
          
             
              
    <div class="container-fluid">
            <div class="col-md-12">
              <div class="row">
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
                   
                  </tr>
                  </thead>
                  <tbody>
                  <?php echo vehicle_list();?>
                </table>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.col -->
          
<?php include 'includes/footer.php' ?>