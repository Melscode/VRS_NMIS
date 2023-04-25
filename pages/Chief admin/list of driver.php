<?php include 'includes/header.php'; ?>

<?php include '../../includes/functions.php'?>
          <!-- content -->

          <div class="container-fluid">
            <div class="col-md-12">
              <div class="row">
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
                  <?php list_view_driver(); ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
          </div>
          
 <?php include 'includes/footer.php'; ?>