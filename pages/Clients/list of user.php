<?php include 'includes/header.php'; ?>

   
              

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
                            $govmail =$row['govmail'];
                            $contact_number=$row['contact_number'];
                            $role =$row['role'];

                        echo '<tr>
                        <th scope="row">'.$employee_id.'</th>
                        <td>'.$first_name.'</td>
                        <td>'.$last_name.'</td>
                        <td>'.$username.'</td>
                        <td>'.$position.'</td>
                        <td>'.$division.'</td>
                        <td>'.$govmail.'</td>
                        <td>'.$contact_number.'</td>
                        <td>'.$role.'</td>

                        </tr>';
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
          <?php include 'includes/footer.php'; ?>