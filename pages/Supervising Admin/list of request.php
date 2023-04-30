<?php include 'includes/header.php';?>
<?php include '../../includes/functions.php';?>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Transaction_ID</th>
                    <th>Fullname</th>
                    <th>Are you the Passenger?</th>
                    <th>No. of Passenger</th>
                    <th>Name of Passenger</th>
                    <th>Office</th>
                    <th>Raduis</th>
                    <th>Pick up Point</th>
                    <th>Drop off Point</th>
                    <th>Date Start</th>
                    <th>Date End</th>
                    <th>Time Start</th>
                    <th>Time End :</th>
                    <th>Purpose :</th>
                    <th>Travel Order :</th>
                    <th>Assigned Driver :</th>
                    <th>Status :</th>
                    <th>Action :</th>
                  </tr>
                  </thead>

                  <tbody>
                  <?php echo admin_list_request();?>


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

 <?php include 'includes/footer.php';?>