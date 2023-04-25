<?php  include  'includes/header.php'?>

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
                  <?php
                      require_once '../../Connection/conn.php';
                      $sql = mysqli_query($conn, "SELECT * FROM vehicles_tbl ");
                      if ($sql){
                          while ($row = mysqli_fetch_assoc($sql)){
                          
                            $plate_number =$row['plate_number'];
                            $vehicle_model =$row['vehicle_model'];
                            $start_odometer=$row['start_odometer']; 
                            $end_odometer=$row['end_odometer'];
                            $assigned_driver=$row['assigned_driver'];
                            


                        echo '<tr>
                        <th scope="row">'.$plate_number.'</th>
                        <td>'.$vehicle_model.'</td>
                        <td>'.$start_odometer.'</td>
                        <td>'.$end_odometer.'</td>
                        <td>'.$assigned_driver.'</td>
                        
                        </tr>';
                          }
                        }
                    ?>
                </table>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.col -->
          
<?php include 'includes/footer.php' ?>