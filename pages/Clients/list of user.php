<?php include 'includes/header.php'; ?>
<?php include '../../includes/functions.php';?>

   
              

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Employee_ID</th>
                    <th>Fullname</th>
                    <th>Username</th>
                    <th>Govmail</th>
                    <th>Position</th>
                    <th>Division</th>
                    <th>Contact No.</th>
                    <th>Region</th>
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
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <?php include 'includes/footer.php'; ?>