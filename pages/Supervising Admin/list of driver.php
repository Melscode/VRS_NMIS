<?php include 'includes/header.php';?>
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
                      require_once '../../Connection/conn.php';
                      $sql = mysqli_query($conn, "SELECT * FROM users_tbl");
                      if ($sql){
                          while ($row = mysqli_fetch_assoc($sql)){
                          
                            $employee_id =$row['employee_id'];
                            $first_name =$row['first_name'];
                            $last_name =$row['last_name']; 
                            $username=$row['username'];
                            $position=$row['position'];
                            $division =$row['division'];
                            $address = $row['address'];
                            $govmail =$row['govmail'];
                            $contact_number=$row['contact_number'];
                            $role =$row['role'];


                        if($role=='Driver'){

                        echo '<tr>
                        <th scope="row">'.$first_name.' '.$last_name.'</th>
                        <td>'.$position.'</td> 
                         <td>'.$address.'</td>
                        <td>'.$division.'</td>
                        </tr>';
                      }
                          }
                        }
                    ?>
                        
                    
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
<?php include 'includes/footer.php';?>