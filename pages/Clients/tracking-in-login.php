<?php

session_start();

?>

<?php include 'includes/header tracking in login.php'; ?>
<?php include '../../includes/functions.php';?>



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

<!--          
<form method="POST" >
        <div class="input-group mb-2">
         <input type="text" class="form-control" placeholder="Transaction_ID" name="transaction_id"  required>
          <div class="input-group-append">
              <button type="submit" name="test" class="btn btn-info"><i class="fas fa-search"></i>  Search</button>
            <span class="fas fa-user"></span>-->
          </div>
        </div> 

        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <!-- <div class="time-label"> -->
                <!-- <span class="bg-info">   -->

                
                
              <!-- </span> -->
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <div class="timeline-item">
                  <!-- <h3 class="timeline-header"><a href="#"> -->
                <tr>
                 <th>
                 
                </tr></th> </a>
                  
                </h3>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div class="time-label">
                <!-- <span class="bg-info"> -->

                <?php 
                // echo third_view();
                ?>
                <!-- </span> -->
                </h3>
                </div>
              </div>

             
              <!-- END timeline item -->
              <!-- timeline time label -->
              <div class="time-label">
                <!-- <span class="bg-info"> -->

                <?php 
                echo fourth();
                ?>
                <!-- </span> -->
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
            

                <div class="timeline-item">
                  <!-- <h3 class="timeline-header"><a href="#"></a> -->
                  <?php  if(isset($_POST['test']))
                      {
                        $transaction_id = $_POST['transaction_id'];
                        $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');
                        $sql = mysqli_query($conn, "SELECT * FROM transaction_tbl  WHERE transaction_id ='$transaction_id'");
                        while($result = mysqli_fetch_array($sql))
                        {
                          if($result['transaction_description'] == "Checked"){

                          
                          echo "
                              
                              <th>
                              </th>
                              ";
                             }
                             else{
                              
                             }
                            }
                          }
                ?>
                </h3>
                </div>
              </div>
              <div class="time-label">
                <!-- <span class="bg-info"> -->
                <?php 
                if(isset($_POST['test'])){
                $transaction_id =$_POST['transaction_id'];
                $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');
                $sql = mysqli_query($conn, "SELECT * FROM transaction_tbl WHERE transaction_id= '$transaction_id'");
                if($sql){
                  while ($row = mysqli_fetch_array($sql)<0){
                  }
                  }
                }
                ?>
                <!-- </span> -->
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <div class="timeline-item">
                  <!-- <span class="time"><i class="fas fa-clock"></i> 10:05 AM</span>
                  <h3 class="timeline-header"><a href="#"></a> -->
                
                </h3>

                </div>
              </div>
              <div class="time-label">
                <!-- <span class="bg-info"> -->
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
                <!-- </span> -->
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <div class="timeline-item">
                  <!-- <span class="time"><i class="fas fa-clock"></i> 10:05 AM</span>
                  <h3 class="timeline-header"><a href="#"></a> -->
                
                </h3>
                </div>
              </div>
              <!-- END timeline item -->
            </div>
          </div>
          <!-- /.col -->

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}
body {
    font-family: "Poppins", sans-serif;
    
    background: url('../login form/images/opd.png') center no-repeat;
    background-size: cover;
}

.step-wizard {
    /* background-color: #0000 ; */
    /* background-image: linear-gradient(rgba(0, 0, 255, 0.5), rgba(255, 255, 0, 0.5)); */
    height: 50vh;
    width: 100%;

    /* display: flex; */
    /* justify-content: center; */
    /* align-items: center; */
}
.step-wizard-list{
    
    /* box-shadow: 0 15px 25px rgba(0,0,0,0.1); */
    color: transparent;
    list-style-type: none;
    border-radius: 10px;
    display: flex;
    padding: 20px 10px;
    position: relative;
    z-index: 10;
}

.step-wizard-item{
    padding: 0 20px;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive:1;
    flex-grow: 1;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    text-align: center;
    min-width: 170px;
    position: relative;
}
.step-wizard-item + .step-wizard-item:after{
    content: "";
    position: absolute;
    left: 0;
    top: 19px;
    background: #fff;
    width: 100%;
    height: 2px;
    transform: translateX(-50%);
    z-index: -10;
}
.progress-count{
    height: 40px;
    width:40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-weight: 600;
    margin: 0 auto;
    position: relative;
    z-index:10;
    color: transparent;
}
.progress-count:after{
    content: "";
    height: 40px;
    width: 40px;
    background:#5D9C59;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    z-index: -10;
}
.progress-count:before{
    content: "";
    height: 10px;
    width: 20px;
    border-left: 3px solid #fff;
    border-bottom: 3px solid #fff;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -60%) rotate(-45deg);
    transform-origin: center center;
}
.progress-label{
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
}
.current-item .progress-count:before,
.current-item ~ .step-wizard-item .progress-count:before{
    display: none;
}
.current-item ~ .step-wizard-item .progress-count:after{
    height:10px;
    width:10px;
}
.current-item ~ .step-wizard-item .progress-label{
    opacity: 0.5;
}
.current-item .progress-count:after{
    background: #fff;
    border: 2px solid #21d4fd;
}
.current-item .progress-count{
    color: #21d4fd;
}

  </style>



        <section class="step-wizard">
        <ul class="step-wizard-list">
        <?php echo second_view();?>
        <?php echo checked_motorpool();?>
            
        <?php echo initial_supervising();?>

        <?php echo approved_chiefadmin();?>
        
        </ul>  
       
    </section>
    <section class="step-wizard">
        <ul class="step-wizard-list">
         <?php echo  calculate();?>
        
        </ul>  
       
    </section>

    </div>
        </div>
          <?php include 'includes/footer.php'; ?>



