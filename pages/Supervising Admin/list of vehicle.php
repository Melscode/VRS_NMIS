<?php include 'includes/header.php';?>
<?php include '../../includes/functions.php';?>          

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
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
  <?php include 'includes/footer.php';?>