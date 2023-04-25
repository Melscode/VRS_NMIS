<?php

session_start();

?>

<?php include 'includes/header.php'; ?>
<?php include '../../includes/functions.php';?>



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

         
<form method="POST" >
        <div class="input-group mb-3">
         <input type="text" class="form-control" placeholder="Transaction_ID" name="transaction_id"  required>
          <div class="input-group-append">
            <div class="input-group-text">
              <button type="submit" name="test" class =""><i class="fas fa-search"></i>  Search</button>
            <!--  <span class="fas fa-user"></span>-->
            </div>
          </div>
        </div>

        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-info">  

                <?php  echo first_view(); ?>
                
              </span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
               
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 10:09 AM</span>
                  <h3 class="timeline-header"><a href="#">
                  
                <tr>
                 <th>

                 <?php echo second_view();?>

                </tr></th> </a>
                  <?php?>
                </h3>

                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div class="time-label">
                <span class="bg-info">

                <?php 
                echo third_view();
                ?>
                
                
                </h3>
                </div>
              </div>

             
              <!-- END timeline item -->
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-info">

                <?php 
                echo fourth();
                ?>
                </span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
            

                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 10:05 AM</span>

                  <h3 class="timeline-header"><a href="#"></a>
                
                  <?php  if(isset($_POST['test']))
                {
                  $transaction_id = $_POST['transaction_id'];
                  $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');
                  $sql = mysqli_query($conn, "SELECT * FROM transaction_tbl  WHERE transaction_id ='$transaction_id'");

                  while($result = mysqli_fetch_array($sql))
                  {
                    
                        if($result['transaction_description'] == "Checked"){
                            
                              echo "
                              <span class='btn btn-warning'>Motorpool was review your application</span>
                              <th>
                              </th>
                              
                              ";
                              
                              
                             }
                             
                             
                             else{

                              
                              echo "
                              <span class=''></span>
                              <th>
                              </th>
                              
                              ";

                      
                             }
                            }
                          }

                ?>
                
                
                
                </h3>

                </div>
              </div>




              <div class="time-label">
                <span class="bg-info">

                <?php 
                if(isset($_POST['test'])){

                $transaction_id =$_POST['transaction_id'];
                $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');
                $sql = mysqli_query($conn, "SELECT * FROM transaction_tbl WHERE transaction_id= '$transaction_id'");
                if($sql){
                  while ($row = mysqli_fetch_array($sql)<0){

          

                   echo "Today :" .date('Y/m/d');

              
                    
                  }

                  
             
                  
                  }
                }
                ?>
                </span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
            

                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 10:05 AM</span>

                  <h3 class="timeline-header"><a href="#"></a>
                
                  <?php  if(isset($_POST['test']))
                {
                  $transaction_id = $_POST['transaction_id'];
                  $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');
                  $sql = mysqli_query($conn, "SELECT * FROM transaction_tbl  WHERE transaction_id ='$transaction_id'");

                  while($result = mysqli_fetch_array($sql))
                  {
                    
                        if($result['transaction_description'] == "Initialed"){
                            
                              echo "
                              <span class='btn btn-primary'>Your request was intitial by Supervising Admin</span>
                              <th>
                              </th>
                              
                              ";
                              
                              
                             }
                             
                             
                             else{

                              
                              echo "
                              <span class=''></span>
                              <th>
                              </th>
                              
                              ";

                      
                             }
                            }
                          }

                ?>
                
                
                
                </h3>

                </div>
              </div>
              <div class="time-label">
                <span class="bg-info">

                <?php 
                if(isset($_POST['test'])){

                $transaction_id =$_POST['transaction_id'];
                $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');
                $sql = mysqli_query($conn, "SELECT * FROM transaction_tbl WHERE transaction_id= '$transaction_id'");
                if($sql){
                  while ($row = mysqli_fetch_array($sql)<0){

          

                   echo "Today :" .date('Y/m/d');

              
                    
                  }

                  
             
                  
                  }
                }
                ?>
                </span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
            

                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 10:05 AM</span>

                  <h3 class="timeline-header"><a href="#"></a>
                
                  <?php  if(isset($_POST['test']))
                {
                  $transaction_id = $_POST['transaction_id'];
                  $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');
                  $sql = mysqli_query($conn, "SELECT * FROM transaction_tbl  WHERE transaction_id ='$transaction_id'");

                  while($result = mysqli_fetch_array($sql))
                  {
                    
                        if($result['transaction_description'] == "Approved"){
                            
                              echo "
                              <span class='btn btn-success'>Request was  Approved by Chief Admin</span>
                              <th>
                              </th>
                              
                              ";
                              
                              
                             }
                             
                             
                             else{

                              
                              echo "
                              <span class=''></span>
                              <th>
                              </th>
                              
                              ";

                      
                             }
                            }
                          }

                ?>
                
                
                
                </h3>

                </div>
              </div>
              <!-- END timeline item -->
            </div>
          </div>
          <!-- /.col -->
          <?php include 'includes/footer.php'; ?>






