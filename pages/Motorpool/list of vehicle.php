<?php include 'includes/header.php'; ?>

<?php include '../../includes/functions.php'; ?>
<?php echo add_vehicle();?>

   <!-- Main content -->
   <div class="card-footer clearfix">
        <div class="card-header"></h3>
         <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#adduserModal"><i class="fas fa-plus"></i> Add Vehicle</button>
        </div>
       </div>

       <div class="modal fade" role="dialog" id="adduserModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Add Vehicle</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form  method="POST">

            <div class="modal-body">
              <div class="form-group">
                <input type="text" name="plate_number" class="form-control" placeholder="Plate-Number">
              </div>

              <div class="form-group">
                <input type="text" name="vehicle_model" class="form-control" placeholder="Vehicle Model">
              </div>

              
              <div class="form-group">
                <input type="number" name="start_odometer" class="form-control" placeholder="Start Odometer">
              </div>

              <div class="form-group">
                <input type="number" name="end_odometer" class="form-control" placeholder="End Odometer">
              </div> 

              <div class ="form-group">
              <select name="assigned_driver" class="form-control">
                            <option value="">-- Select Driver--</option>
                               <?php echo all_driver();?>
							</select>
              </div>
      

            </div>
          

            <div class="modal-footer">
              <button type="submit" class="btn btn-success" name = "save">Add</button>
            </div>

          </div>
        </div>
       </div>        
             
             
              
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
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php echo view_vehicle();?>
                      <!-- Delete  -->
                      <div class="modal fade" role="dialog" id="deleteModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h3 class="modal-title">Delete Vehicle</h3>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                              <p>Are you sure you want to delete the vehicle?</p>
                    
                            </div>
                    
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                          </div>
                        </div>
                      </div>
                                      <!-- EDIT  -->
                      <div class="modal fade" role="dialog" id="editModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h3 class="modal-title">Edit Vehicle</h3>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">

                              <div class="form-group">
                                <input type="text" name="Plate No." class="form-control" placeholder="Plate No.">
                              </div>
                    
                              <div class="form-group">
                                <input type="text" name="Vehicle Model" class="form-control" placeholder="Vehicle Model">
                              </div>
                    
                              <div class="form-group">
                                <input type="number" name="Start-Odometer" class="form-control" placeholder="Start-Odometer">
                              </div>
                    
                              <div class="form-group">
                                <input type="number" name="End-Odometer" class="form-control" placeholder="End-Odometer">
                              </div>
                    
                              <div class="form-group">
                                <input type="text" name="Assigned Driver" class="form-control" placeholder="Assigned Driver">
                              </div>
                    
                            </div>
                    
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-success">Edit</button>
                            </div>
                          </div>
                        </div>
                      </div>

                   </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
          
          </div>
          <!-- /.col -->
          <?php include 'includes/footer.php'; ?>