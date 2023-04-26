<?php include 'includes/header.php';?>
<?php include '../../includes/functions.php';?>

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
                    <th>Date Start :</th>
                    <th>Date End :</th>
                    <th>Time Start :</th>
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