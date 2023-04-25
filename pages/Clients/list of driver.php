

<?php include 'includes/header.php'; ?>
              

                 <!-- /.card-header -->
             <!-- /.card-header -->
             <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Fullname</th>
                  <th>Position</th>
                  <th>Address</th>
                  <th>Division</th>
                 
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php
                    echo list_driver();
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