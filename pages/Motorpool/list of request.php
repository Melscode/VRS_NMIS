<?php include 'includes/header.php'; ?>
<!-- 
<?php include "../../includes/functions.php";

// if(isset($_POST['save'])){


//   $asigned_driver=$_POST['asigned_driver'];
//   $transaction_id=$row['transaction'];



//   $sql = "UPDATE request_tbl SET asigned_driver = '$assigned_driver' WHERE  transaction_id = ";

//   $result = mysqli_query($conn, $sql);
//   if($result){



//     echo "<script>alert('SWABE!!');</script>";
//     header ('Location: ../pages/tables/liost of driver.php');
//   }
// } 
 ?> -->


       <!-- Main content -->
       <div class="card-footer clearfix">
        <div class="card-header"></h3>
         <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addriverModal"><i class="fas fa-plus"></i> Add Driver</button>
        </div>
       </div>

       <div class="modal fade" role="dialog" id="addriverModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Assigned</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
              
              <div class="form-input">
							<select name="division" class="form-control">
								<option  id= "division" value="">--Select Division--</option>
									<option value="Laboratory">Laboratory</option>
									<option value="POSMD">POSMD</option>
									<option value="MIED" >MIED</option>
									<option value="Cashier">Cashier</option>
									<option value="Engineering">Engineering</option>
									<option value="ARD">ARD</option>
									<option value="Property">Property</option>
									<option value="Records">Records</option>
									<option value="OED">OED</option>
									<option value="HRM">HRM</option>
									<option value="PIMD">PIMD</option>
									<option value="Admin">Admin</option>
									<option value="BAC">BAC</option>
									<option value="Accounting">Accounting</option>
							</select>
						</div><br>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success" name = "save">Add Driver</button>
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
