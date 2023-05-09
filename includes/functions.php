<?php
include 'connection.php';
?>
<!-- CLIENT LIST OF REQUEST -->
<?php
include 'connection.php';
function add_request()
{
 global $conn;
   if(isset($_POST['save']))
  {
            $employee_id = $_SESSION['employee_id'];
            // $transaction_id=mysqli_real_escape_string($conn,$_POST['transaction_id']);
            $transaction_id = 'NMISVRS-'.rand(1,50);
            $requestor_name= $_SESSION['name'];
            // $requestor_name=mysqli_real_escape_string($conn, $_POST[$employee_id]);
            // $requestor_govmail=mysqli_real_escape_string($conn, $_POST['requestor_govmail']);
            $requestor_govmail=$_SESSION['govmail'];
            // $requestor_position=mysqli_real_escape_string($conn, $_POST['requestor_position']);
            $requestor_position=$_SESSION['position'];
            $requestor_division= mysqli_real_escape_string($conn,$_POST['requestor_division']);
            $requestor_contact_number= mysqli_real_escape_string($conn,$_POST['requestor_contact_number']);
            $region=mysqli_real_escape_string($conn,$_POST['region']);
            // $region=$_SESSION['region'];
            $passenger =mysqli_real_escape_string($conn,$_POST['passenger']);
            $number_of_passenger =mysqli_real_escape_string($conn,$_POST['number_of_passenger']);
            $name_of_passenger =mysqli_real_escape_string($conn,$_POST['name_of_passenger']);
            $office=mysqli_real_escape_string($conn,$_POST['office']);
            $raduis=$_POST['raduis'];
            $pickup_point=$_POST['pickup_point'];
             $destination =mysqli_real_escape_string($conn,$_POST['destination']);
            $start_date=mysqli_real_escape_string($conn,$_POST['start_date']);
            $end_date=mysqli_real_escape_string($conn, $_POST['end_date']);
            $start_time=mysqli_real_escape_string($conn, $_POST['start_time']);
            $end_time=mysqli_real_escape_string($conn, $_POST['end_time']);
            $purpose= $_POST['purpose'];
            $travel_order= mysqli_real_escape_string($conn,$_POST['travel_order']);
                $_SESSION['raduis'] =$raduis;

        $sql = "INSERT INTO request_tbl (transaction_id, requestor_name, requestor_govmail, requestor_position, requestor_division, requestor_contact_number, region, passenger, number_of_passenger, name_of_passenger, office, raduis, pickup_point, destination, start_date, end_date, start_time, end_time, purpose, travel_order) 
  		  VALUES  ('$transaction_id', '$employee_id', '$requestor_govmail', '$requestor_position', '$requestor_division', '$requestor_contact_number', '$region', '$passenger', '$number_of_passenger', '$name_of_passenger', '$office', '$raduis','$pickup_point', '$destination', '$start_date', '$end_date', '$start_time', '$end_time', '$purpose', '$travel_order')";
  

        if($result  = mysqli_query($conn, $sql) ){
          ?>
                <div class="alert alert-success " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">OK</button>
                  <h5><i class="icon fas fa-check"></i>REQUEST</h5>
                  was Successfully submitted! plss Click ok.
                </div>
             <?php
              
      }        
    }
  }

?>


<!-- Client List Request -->

<?php
include 'connection.php';
function client_request()
{
  global $conn;
    $employee_id = $_SESSION['employee_id'];
    $sql = mysqli_query($conn, "SELECT * FROM request_tbl WHERE requestor_name ='$employee_id' ");
   
    while($row = mysqli_fetch_array($sql))
    {
      
        $transaction_id =$row['transaction_id'];
        $requestor_name =$_SESSION['name'];
        $requestor_govmail=$row['requestor_govmail']; 
        $requestor_position=$row['requestor_position'];
        $requestor_division=$row['requestor_division'];
        $requestor_contact_number =$row['requestor_contact_number'];
        $region=$row['region'];
        $passenger =$row['passenger'];
        $number_of_passenger=$row['number_of_passenger'];
        $name_of_passenger =$row['name_of_passenger'];
        $office =$row ['office'];
        $raduis =$row['raduis'];
        $pickup_point = $row['pickup_point'];
        $destination =$row['destination'];
        $start_date =$row['start_date'];
        $end_date =$row['end_date'];
        $start_time =$row['start_time'];
        $end_time =$row['end_time'];
        $purpose =$row['purpose'];
        $travel_order =$row['travel_order'];
        $asigned_driver =$row['asigned_driver'];
        $reservation_status=$row['reservation_status'];
?>

    <tr>
        <th><?php echo $transaction_id; ?></th>
        <th><?php echo $passenger ; ?></th>
        <th><?php echo $number_of_passenger; ?></th>
        <th><?php echo $name_of_passenger; ?></th>
        <th><?php echo $office; ?></th>
        <th><?php echo $raduis; ?></th>
        <th><?php echo $pickup_point; ?></th>
        <th><?php echo $destination; ?></th>
        <th><?php echo $start_date; ?></th>
        <th><?php echo $end_date; ?></th>
        <th><?php echo date('h:i a',strtotime($start_time)); ?></th>
        <th><?php echo date('h:i a',strtotime($end_time));$end_time; ?></th>
        <th><?php echo $purpose ; ?></th>
        <th><?php echo $travel_order; ?></th>
        <th><?php echo $asigned_driver; ?></th>
        <th>
          <?php 
            if($reservation_status == "Initialled")
            {
              echo "
              <span class='badge badge-primary'>Initialed</span>
              <th>
              <a href='../../Connection/set-status-technical3.php?transaction_id=$transaction_id &reservation_status=Approved' class='btn btn-success btn-sm'>Approve</a>
              </th>
              
              ";
          
            }
            else if($reservation_status == "Approved")
            {
              echo "
              <span class='badge badge-success'>Approved</span>
              <th>
                
              </th>
              
              ";
          
            } else if($reservation_status == "Pending")
            {
              echo "
              <span class='badge badge-warning'>Pending</span>
              <th>
                
              </th>
              
              ";
          
            }else if($reservation_status == "Canceled")
            {
              echo "
              <span class='badge badge-danger'>Cenceled</span>
              <th>
                
              </th>
              
              ";
          
            }
            else
            {
              echo "
              <span class='badge badge-warning'>Pending</span>
              <th>
              <a href='../../Connection/set-status-technical5.php?transaction_id=$transaction_id &reservation_status=Canceled' class='btn btn-danger btn-sm'>Cancel</a>
              </th>
              
              ";
            }
          ?> 
        </th> 
      </tr>
<?php }}?>


<!--Client List Of Driver Driver-->
<?php
  function list_view_driver(){
    global $conn;
      $sql = mysqli_query($conn, "SELECT * FROM users_tbl");
        if ($sql){while ($row = mysqli_fetch_assoc($sql)){ 
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
 } 
 ?>


<!-- Client List of User -->

<?php
  include 'connection.php';
    function list_view_user(){
      global $conn;
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
 }
?>



<!-- Client Time Line-->
<?php 
  function first_view(){
    global $conn;
     if(isset($_POST['test'])){
       $transaction_id =$_POST['transaction_id'];
       $sql = mysqli_query($conn, "SELECT * FROM transaction_tbl WHERE transaction_id= '$transaction_id'");
     if($sql){
     while ($row = mysqli_fetch_array($sql)<0){
        echo "Today :" .date('Y/m/d');
       }
      }
    }
  } 

   function second_view(){
     global $conn;
      if(isset($_POST['test'])) {

          $transaction_id = $_POST['transaction_id'];
          $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');
          $sql = mysqli_query($conn, "SELECT * FROM transaction_tbl  WHERE transaction_id ='$transaction_id'");

      while($result = mysqli_fetch_array($sql)){
            if($result['transaction_description'] == "Verified")

                 {
                  ?>
                  
     
              <li class="step-wizard-item ">
                  <span class="progress-count current-item ">1</span>
                  <span class="progress-label"> <span class='btn btn-success'> The request was Verified by Supervising Admin</span></span>
              </li>
   
                <?php  

     }else if($result['transaction_description'] == "Canceled"){
      ?>
                  
     
      <li class="step-wizard-item ">
          <span class="">0</span>
          <span class="progress-label"> <span class='btn btn-warning'>Your request is still Pending </span></span>
      </li>

        <?php  

     }else{

    


     }
        }
      }
     }

function third_view(){
  global $conn;
    if(isset($_POST['test'])){
      $transaction_id =$_POST['transaction_id'];
      $sql = mysqli_query($conn, "SELECT * FROM transaction_tbl WHERE transaction_id= '$transaction_id'");

      if($sql){while ($row = mysqli_fetch_array($sql)<0){
       echo "Today :" .date('Y/m/d');    
      } 
    }
  }
?>
          </span>
        </div>
      <div>
      <div class="timeline-item">
        <!-- <span class="time"><i class="fas fa-clock"></i> 1:00 PM</span> -->
          <!-- <h3 class="timeline-header no-border"><a href="#"></a>  -->


     
<?php  if(isset($_POST['test']))
      {
        $transaction_id = $_POST['transaction_id'];
        $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');
        $sql = mysqli_query($conn, "SELECT * FROM transaction_tbl  WHERE transaction_id ='$transaction_id'");
        while($result = mysqli_fetch_array($sql))
       {
          
          if($result['transaction_description'] == "Checked"){
                  
              echo "
              <span class='btn btn-info'>The request was Checked by Motorpool</span>
              <th>
              </th>
              
              ";
              
              
              }else if($result['transaction_description'] == "Processing") 
              
              {

              echo "
              <span class=''>  Your Request is on Processing</span>
              <th>
              </th>
              
              ";

              }else   if($result['transaction_description'] == "Canceled")
              
              {
              echo "
              <span class=''> Rerquest was Cancelled</span>
              <th>
              </th>
              
              ";

              }
              else
              {
              echo "
              <span class=''></span>
              <th>
              </th>";
              }
    }
  }
}

function fourth(){
    global $conn;
     if(isset($_POST['test'])){
      global $conn;
       $transaction_id =$_POST['transaction_id'];
        $sql = mysqli_query($conn, "SELECT * FROM transaction_tbl WHERE transaction_id= '$transaction_id'");

      if($sql){
        while ($row = mysqli_fetch_array($sql)<0){
         echo "Today :" .date('Y/m/d');  
        }
      }
    }
  }
?>

<?php 

function initial_supervising(){
  global $conn;

 if(isset($_POST['test']))
                {
                  $transaction_id = $_POST['transaction_id'];
                  $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');
                  $sql = mysqli_query($conn, "SELECT * FROM transaction_tbl  WHERE transaction_id ='$transaction_id'");
                  while($result = mysqli_fetch_array($sql))
                  {
                        if($result['transaction_description'] == "Initialed"){
                            
                          
                          ?>
                          

                          <li class="step-wizard-item ">
                <span class="progress-count current-item">2</span>
                <span class="progress-label"><span class='btn btn-success'>Assinged Driver Swabe!!</span></span>
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count current-item">2</span>
                <span class="progress-label"><span class='btn btn-success'>Your request was intitial by Supervising Admin</span></span>
            </li>
                        
                          
            <?php
                             }
                             else{
                              
                             }
                            }
             }             }
                ?>




<?php 
 function approved_chiefadmin(){
  global $conn;
if(isset($_POST['test']))
                {
                  $transaction_id = $_POST['transaction_id'];
                  $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');
                  $sql = mysqli_query($conn, "SELECT * FROM transaction_tbl  WHERE transaction_id ='$transaction_id'");

                  while($result = mysqli_fetch_array($sql))
                  {
                        if($result['transaction_description'] == "Approved"){
                            
                                              
                          ?>


                          <li class="step-wizard-item ">
                <span class="progress-count current-item">2</span>
                <span class="progress-label"><span class='btn btn-success'>Your request was Approved by Chief Admin</span></span>
            </li>
                          
            <?php

        
              }
              else{
              
              }
            }
          }
               } ?>

<!-- Supervising Admin Dashboard -->
      <!-- Admin Total Request -->
<?php 
include 'connection.php';

function admin_total_request()
      {
        global $conn;
        $query = "SELECT * FROM request_tbl";
        $query_execute = mysqli_query($conn, $query);     
        
        $row = mysqli_num_rows($query_execute);
        echo "<p>Total Request</p>";
        echo "<h3>$row</h3>"; 


      }

      function admin_new_request()
      {
        global $conn;
        $query = "SELECT * FROM request_tbl WHERE raduis ='Within-Manila'";
        $query_execute = mysqli_query($conn, $query);     
        
        $row = mysqli_num_rows($query_execute);
        

       
        echo "<p>New Request</p>";
        echo "<h3>$row</h3>"; 
    
      }

        // Request for initial of Admin

 function admin_checked_request()
        {      
            global $conn;
            $query = "SELECT * FROM request_tbl WHERE reservation_status ='Checked'";
            $query_execute = mysqli_query($conn, $query);     
            
            $row = mysqli_num_rows($query_execute);
            echo "<p>Request For Initial</p>";
            echo "<h3>$row</h3>"; 
        }

            // Request for initial of Admin

 function admin_outside_manila_request()
 {      
     global $conn;
     $query = "SELECT * FROM request_tbl WHERE raduis='Outside-Manila'";
     $query_execute = mysqli_query($conn, $query);     
     
     $row = mysqli_num_rows($query_execute);
     echo "<p>Outside-Manila Request</p>";
     echo "<h3>$row</h3>"; 
 }

            // Admin Approved Request

function admin_approved_request()
        {      
            global $conn;
            $query = "SELECT * FROM request_tbl WHERE reservation_status ='Approved'";
            $query_execute = mysqli_query($conn, $query);     
            
            $row = mysqli_num_rows($query_execute);
            echo "<p>Approved Request</p>";
            echo "<h3>$row</h3>"; 
        }
?>


<!-- Admin Request for Initial -->

<?php
include 'connection.php';
function admin_list_request_for_initial(){
  global $conn;

// $sql = mysqli_query($conn, "SELECT * FROM request_tbl");
$sql = mysqli_query($conn, "SELECT * FROM request_tbl  WHERE reservation_status ='Checked'");
while($row = mysqli_fetch_array($sql))
{
  
    $transaction_id =$row['transaction_id'];
    $requestor_name =$row['requestor_name'];
    $requestor_govmail=$row['requestor_govmail']; 
    $requestor_position=$row['requestor_position'];
    $requestor_division=$row['requestor_division'];
    $requestor_contact_number =$row['requestor_contact_number'];
    $region=$row['region'];
        $passenger =$row['passenger'];
        $number_of_passenger=$row['number_of_passenger'];
        $name_of_passenger =$row['name_of_passenger'];
        $office =$row ['office'];
        $raduis =$row['raduis'];
    $pickup_point=$row['pickup_point'];
    $destination =$row['destination'];
    $start_date =$row['start_date'];
    $end_date =$row['end_date'];
    $start_time =$row['start_time'];
    $end_time =$row['end_time'];
    $purpose =$row['purpose'];
    $travel_order =$row['travel_order'];
    $asigned_driver =$row['asigned_driver'];
    $reservation_status=$row['reservation_status'];

  ?>


<tr> 
    <th><?php echo $transaction_id; ?></th>
    <th><?php echo $requestor_name ; ?></th>
    <th><?php echo $passenger ; ?></th>
        <th><?php echo $number_of_passenger; ?></th>
        <th><?php echo $name_of_passenger; ?></th>
        <th><?php echo $office; ?></th>
        <th><?php echo $raduis; ?></th>
        <th><?php echo $pickup_point; ?></th>
        <th><?php echo $destination; ?></th>
        <th><?php echo $start_date; ?></th>
        <th><?php echo $end_date; ?></th>
        <th><?php echo date('h:i a',strtotime($start_time)); ?></th>
        <th><?php echo date('h:i a',strtotime($end_time));$end_time; ?></th>
        <th><?php echo $purpose ; ?></th>
        <th><?php echo $travel_order; ?></th>
        <th><?php echo $asigned_driver; ?></th>

    <th>
      
      <?php 
        if($reservation_status == "Verified")
        {
          echo "
          <span class='badge badge-success'>Verified</span>
          <th>
          </th>
          
          ";
      
        }
        else if($reservation_status == "Approved")
        {
          echo "
          <span class='badge badge-success'>Approved</span>
          <th>
          <a href='../../includes/trip_ticket.html' class='btn btn-info btn-sm'>Trip Ticket</a>
          </th>
          
          ";
      
        } else if($reservation_status == "Pending")
        {
          echo "
          <span class='badge badge-warning'>Pending</span>
          <th>
          
          </th>
          
          ";
      
        }else if ($reservation_status == "Checked")
        {

          echo "
          <span class='badge badge-info'>Checked</span>
          <th>
            <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Initialed ' class='btn btn-warning btn-sm'>Initial</a>
          </th>
          
          ";
        }else if ($reservation_status == "Initialed")
        {

          echo "
          <span class='badge badge-primary'>Initialed</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Canceled' class='btn btn-danger btn-sm'>Cancel</a>
          </th>
          
          ";
        }
        
        else if ($reservation_status == 'Canceled')
        {
          echo "
          <span class='badge badge-danger'>Canceled</span>
          <th>
        
          </th>
          
          ";
      
        }else
        {
          echo "
          <span class='badge badge-info'>Processing</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Verified' class='btn btn-success btn-sm'>Verify</a>
          </th>
          
          ";
        }

      ?> 

    </th>
    
    
  </tr>

<?php }}?>

<!--Admin List Approved Request -->

<?php
include 'connection.php';
function admin_list_approved_request(){
  global $conn;

// $sql = mysqli_query($conn, "SELECT * FROM request_tbl");
$sql = mysqli_query($conn, "SELECT * FROM request_tbl  WHERE reservation_status ='Approved'");
while($row = mysqli_fetch_array($sql))
{
  
    $transaction_id =$row['transaction_id'];
    $requestor_name =$row['requestor_name'];
    $requestor_govmail=$row['requestor_govmail']; 
    $requestor_position=$row['requestor_position'];
    $requestor_division=$row['requestor_division'];
    $requestor_contact_number =$row['requestor_contact_number'];
    $region=$row['region'];
        $passenger =$row['passenger'];
        $number_of_passenger=$row['number_of_passenger'];
        $name_of_passenger =$row['name_of_passenger'];
        $office =$row ['office'];
        $raduis =$row['raduis'];
    $pickup_point=$row['pickup_point'];
    $destination =$row['destination'];
    $start_date =$row['start_date'];
    $end_date =$row['end_date'];
    $start_time =$row['start_time'];
    $end_time =$row['end_time'];
    $purpose =$row['purpose'];
    $travel_order =$row['travel_order'];
    $asigned_driver =$row['asigned_driver'];
    $reservation_status=$row['reservation_status'];

  ?>


<tr> 
    <th><?php echo $transaction_id; ?></th>
    <th><?php echo $requestor_name ; ?></th>
    <th><?php echo $passenger ; ?></th>
        <th><?php echo $number_of_passenger; ?></th>
        <th><?php echo $name_of_passenger; ?></th>
        <th><?php echo $office; ?></th>
        <th><?php echo $raduis; ?></th>
        <th><?php echo $pickup_point; ?></th>
        <th><?php echo $destination; ?></th>
        <th><?php echo $start_date; ?></th>
        <th><?php echo $end_date; ?></th>
        <th><?php echo date('h:i a',strtotime($start_time)); ?></th>
        <th><?php echo date('h:i a',strtotime($end_time));$end_time; ?></th>
        <th><?php echo $purpose ; ?></th>
        <th><?php echo $travel_order; ?></th>
        <th><?php echo $asigned_driver; ?></th>

    <th>
      
      <?php 
        if($reservation_status == "Verified")
        {
          echo "
          <span class='badge badge-success'>Verified</span>
          <th>
          </th>
          
          ";
      
        }
        else if($reservation_status == "Approved")
        {
          echo "
          <span class='badge badge-success'>Approved</span>
          <th>
          
          </th>
          
          ";
      
        } else if($reservation_status == "Pending")
        {
          echo "
          <span class='badge badge-warning'>Pending</span>
          <th>
          
          </th>
          
          ";
      
        }else if ($reservation_status == "Checked")
        {

          echo "
          <span class='badge badge-info'>Checked</span>
          <th>
            <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Initialed ' class='btn btn-warning btn-sm'>Initial</a>
          </th>
          
          ";
        }else if ($reservation_status == "Initialed")
        {

          echo "
          <span class='badge badge-primary'>Initialed</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Canceled' class='btn btn-danger btn-sm'>Cancel</a>
          </th>
          
          ";
        }
        
        else if ($reservation_status == 'Canceled')
        {
          echo "
          <span class='badge badge-danger'>Canceled</span>
          <th>
        
          </th>
          
          ";
      
        }else
        {
          echo "
          <span class='badge badge-info'>Processing</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Verified' class='btn btn-success btn-sm'>Verify</a>
          </th>
          
          ";
        }

      ?> 

    </th>
    
    
  </tr>

<?php }}?>




<!-- Motorpool Approved Request For Trip Ticket -->

<?php
include 'connection.php';
function motorpool_list_approved_request(){
  global $conn;

// $sql = mysqli_query($conn, "SELECT * FROM request_tbl");
$sql = mysqli_query($conn, "SELECT * FROM request_tbl  WHERE reservation_status ='Approved'");
while($row = mysqli_fetch_array($sql))
{
  
    $transaction_id =$row['transaction_id'];
    $requestor_name =$row['requestor_name'];
    $requestor_govmail=$row['requestor_govmail']; 
    $requestor_position=$row['requestor_position'];
    $requestor_division=$row['requestor_division'];
    $requestor_contact_number =$row['requestor_contact_number'];
    $region=$row['region'];
        $passenger =$row['passenger'];
        $number_of_passenger=$row['number_of_passenger'];
        $name_of_passenger =$row['name_of_passenger'];
        $office =$row ['office'];
        $raduis =$row['raduis'];
    $pickup_point=$row['pickup_point'];
    $destination =$row['destination'];
    $start_date =$row['start_date'];
    $end_date =$row['end_date'];
    $start_time =$row['start_time'];
    $end_time =$row['end_time'];
    $purpose =$row['purpose'];
    $travel_order =$row['travel_order'];
    $asigned_driver =$row['asigned_driver'];
    $reservation_status=$row['reservation_status'];

  ?>


<tr> 
    <th><?php echo $transaction_id; ?></th>
    <th><?php echo $requestor_name ; ?></th>
    <th><?php echo $passenger ; ?></th>
        <th><?php echo $number_of_passenger; ?></th>
        <th><?php echo $name_of_passenger; ?></th>
        <th><?php echo $office; ?></th>
        <th><?php echo $raduis; ?></th>
        <th><?php echo $pickup_point; ?></th>
        <th><?php echo $destination; ?></th>
        <th><?php echo $start_date; ?></th>
        <th><?php echo $end_date; ?></th>
        <th><?php echo date('h:i a',strtotime($start_time)); ?></th>
        <th><?php echo date('h:i a',strtotime($end_time));$end_time; ?></th>
        <th><?php echo $purpose ; ?></th>
        <th><?php echo $travel_order; ?></th>
        <th><?php echo $asigned_driver; ?></th>

    <th>
      
      <?php 
        if($reservation_status == "Verified")
        {
          echo "
          <span class='badge badge-success'>Verified</span>
          <th>
          </th>
          
          ";
      
        }
        else if($reservation_status == "Approved")
        {
          echo "
          <span class='badge badge-success'>Approved</span>
          <th>
          <a href='../../includes/trip_ticket.html' class='btn btn-primary btn-sm'>Generate Ticket</a>
          </th>
          
          ";
      
        } else if($reservation_status == "Pending")
        {
          echo "
          <span class='badge badge-warning'>Pending</span>
          <th>
          
          </th>
          
          ";
      
        }else if ($reservation_status == "Checked")
        {

          echo "
          <span class='badge badge-info'>Checked</span>
          <th>
            <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Initialed ' class='btn btn-warning btn-sm'>Initial</a>
          </th>
          
          ";
        }else if ($reservation_status == "Initialed")
        {

          echo "
          <span class='badge badge-primary'>Initialed</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Canceled' class='btn btn-danger btn-sm'>Cancel</a>
          </th>
          
          ";
        }
        
        else if ($reservation_status == 'Canceled')
        {
          echo "
          <span class='badge badge-danger'>Canceled</span>
          <th>
        
          </th>
          
          ";
      
        }else
        {
          echo "
          <span class='badge badge-info'>Processing</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Verified' class='btn btn-success btn-sm'>Verify</a>
          </th>
          
          ";
        }

      ?> 

    </th>
    
    
  </tr>

<?php }}?>

<!-- Motorpool List OF Verified Request -->
<!-- Motorpool Verified Request -->
<?php
    function list_of_verified_request(){
      global $conn;
        $sql = mysqli_query($conn, "SELECT * FROM request_tbl WHERE reservation_status ='Verified'");

         while($row = mysqli_fetch_array($sql))
          {

          $transaction_id =$row['transaction_id'];
          $requestor_name =$row['requestor_name'];
          $requestor_govmail=$row['requestor_govmail']; 
          $requestor_position=$row['requestor_position'];
          $requestor_division=$row['requestor_division'];
          $requestor_contact_number =$row['requestor_contact_number'];
          $region=$row['region'];
          $passenger =$row['passenger'];
          $number_of_passenger =$row['number_of_passenger'];
          $name_of_passenger =$row['name_of_passenger'];
          $office =$row['office'];
          $raduis =$row['raduis'];
          $pickup_point=$row['pickup_point'];
          $destination =$row['destination'];
          $start_date =$row['start_date'];
          $end_date =$row['end_date'];
          $start_time =$row['start_time'];
          $end_time =$row['end_time'];
          $purpose =$row['purpose'];
          $travel_order =$row['travel_order'];
          $reservation_status=$row['reservation_status'];
          $assigned_driver=$row['asigned_driver'];

          if($reservation_status == 'Verified')
          {
            $status = "<span class='badge badge-success'>Verified</span>";
          }
          else if($reservation_status == "Approved")
          {
            $status = "<span class='badge badge-success'>Approved</span>";
          } 
          else if($reservation_status == "Pending")
          {
             $status = "<span class='badge badge-warning'>Pending</span>";
          }
          else if ($reservation_status == "Checked")
          {
              $status = "<span class='badge badge-info'>Checked</span>";
          }
          else if ( $reservation_status == "Processing")
          {
              $status = "<span class='badge badge-info'>Processing</span>";
          }
          else{
              $status = "<span class='badge badge-danger'>Canceled</span>";
              }
?>

      <tr>
      <th><?php echo $transaction_id; ?></th>
    <th><?php echo $requestor_name ; ?></th>
    <th><?php echo $passenger ; ?></th>
        <th><?php echo $number_of_passenger; ?></th>
        <th><?php echo $name_of_passenger; ?></th>
        <th><?php echo $office; ?></th>
        <th><?php echo $raduis; ?></th>
        <th><?php echo $pickup_point; ?></th>
        <th><?php echo $destination; ?></th>
        <th><?php echo $start_date; ?></th>
        <th><?php echo $end_date; ?></th>
        <th><?php echo date('h:i a',strtotime($start_time)); ?></th>
        <th><?php echo date('h:i a',strtotime($end_time));$end_time; ?></th>
        <th><?php echo $purpose ; ?></th>
        <th><?php echo $travel_order; ?></th>
          <td><?php echo $assigned_driver; ?></td>
          <td><?php echo $status; ?></td>
          <td>
              <form method="POST">
              <input type="hidden" name="transaction_id" value="<?php echo $transaction_id;?>">
              <button type="submit" class="btn btn-primary btn-sm" name="assign_driver">Edit</button>
              </form>
          </td>

             <?php
                if(isset($_POST['assign_driver'])){
                   session_start();
                     $_SESSION['transaction_id'] = $_POST['transaction_id'];
                       echo"<script>window.location='assigned driver.php'</script>";
                }
              ?>

            </td>  
          </tr>
<?php }?>































































<!-- ALERST FOR MOTORPOOL LIST REQUEST -->
 

<?php
}

function assign_driver()
{
    global $conn;
    if(isset($_POST['update'])){

  $transaction_id=$_POST['transaction_id'];
  $asigned_driver = $_POST['asigned_driver'];
  $sql1= "UPDATE request_tbl SET asigned_driver = '$asigned_driver', reservation_status ='Checked'WHERE transaction_id ='$transaction_id' ";
 

  $result =mysqli_query($conn, $sql1);
  if($result){
         echo "<script>alert('Assigned Successfully!!');</script>"; 
      }
    }
  }

  function remove_vehicle(){

  
if (isset($_GET['id'])) {
$plate_number = $_GET['id'];
$sql = "DELETE FROM vehicles_tbl WHERE plate_number='$plate_number'";
if(mysqli_query($conn,$sql)){
    
    $_SESSION["delete"] = "Deleted Successfully!";
   
}else{
    die("Something went wrong");
}

  
}


  }
  function alls_driver()
  {
      global $conn;
    
      $driver = "SELECT * From users_tbl WHERE role='Driver'";
      $result = mysqli_query($conn, $driver);
  
      while($row = mysqli_fetch_array($result)){
            
          echo '<option value="'.$row['first_name'].' '.$row=',  '.''.$row['last_name'].'">'.$row['first_name'].' '.$row=',  '.''.$row['last_name'].'</option>';
         
      }
  }



function all_driver()
{
    global $conn;
  
    $driver = "SELECT * From  vehicles_tbl";
    $result = mysqli_query($conn, $driver);

    while($row = mysqli_fetch_array($result)){
          
        echo '<option value="'.$row['plate_number'].' '.$row['assigned_driver'].'">'.$row['plate_number'].' '.$row=' || Driver: '.''.$row['assigned_driver'].'</option>';
       
    }
}
?>

<!-- Supervising Admin Function -->

<!--Admin Dashboard-->

<?php 
 include 'connection.php';

function total_request()
 {
  global $conn;
  $query = "SELECT * FROM request_tbl WHERE reservation_status is NULL";
  $query_execute = mysqli_query($conn, $query);     
  
  $row = mysqli_num_rows($query_execute);
  echo "<p>New Request</p>";
  echo "<h3>$row</h3>"; 


 }

 function total_vehicle()
{
        
    global $conn;

                $query = 'SELECT id FROM vehicles_tbl ORDER BY Id';
                $query_execute = mysqli_query($conn, $query);     
                
                $row = mysqli_num_rows($query_execute);
                echo "<p>Vehicles</p>";
                echo "<h3>$row</h3>"; 
}

function total_driver()
{

  global $conn;
    $query = 'SELECT id FROM users_tbl ORDER BY Id';
    $query_execute = mysqli_query($conn, $query);     
    
    $row = mysqli_num_rows($query_execute);
    echo "<p>Drivers</p>";
    echo "<h3>$row</h3>"; 

}

function total_user()
{

global $conn;

  $query = 'SELECT id FROM users_tbl ORDER BY Id';
  $query_execute = mysqli_query($conn, $query);     
  
  $row = mysqli_num_rows($query_execute);
  echo "<p>User</p>";
  echo "<h3>$row</h3>"; 
  
            
}
?>

<!-- Supervising Admin Report/data.php -->                                    


<?php
include 'connection.php';

function report()
{
     global $conn;
      $sql = mysqli_query($conn, "SELECT * FROM request_tbl");
      if ($sql){
          while ($row = mysqli_fetch_assoc($sql)){
          
            $start_date =$row['start_date'];
            $asigned_driver =$row['asigned_driver'];
            $region =$row['region']; 
            $destination=$row['destination'];
            $remarks=$row['remarks'];

        
            

        if($remarks =='Rejected'){

        echo '<tr>
        <th scope="row">'.$start_date.'</th>
        <td>'.$asigned_driver.'</td> 
          <td>'.$region.'</td>
        <td>'.$destination.'</td>
        <td><span class="badge badge-danger">'.$remarks.'</span></td>
        </tr>';
      }else{

        echo '<tr>
        <th scope="row">'.$start_date.'</th>
        <td>'.$asigned_driver.'</td> 
          <td>'.$region.'</td>
        <td>'.$destination.'</td>
        <td ><span class="badge badge-success">'.$remarks.'</span></td>
        </tr>';
      }
          }
        }
}
         ?>

<!-- Admin List Of Driver -->
<?php
include 'connection.php';

function list_driver()
{

  global $conn;

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
}
?>


<!-- admin add user function -->

<?php
include 'connection.php';

function add_user(){

 global $conn;
if(isset($_POST['save'])){


  $employee_id=mysqli_real_escape_string($conn,$_POST['employee_id']);
  $first_name=mysqli_real_escape_string($conn, $_POST['first_name']);
  $last_name=mysqli_real_escape_string($conn, $_POST['last_name']);
  $username=mysqli_real_escape_string($conn, $_POST['username']);
  $position= mysqli_real_escape_string($conn,$_POST['position']);
  $division= mysqli_real_escape_string($conn,$_POST['division']);
  $govmail=mysqli_real_escape_string($conn,$_POST['govmail']);
  $contact_number=mysqli_real_escape_string($conn,$_POST['contact_number']);
  $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
  $role =mysqli_real_escape_string($conn,$_POST['role']);



  $sql = "INSERT INTO users_tbl (employee_id, first_name, last_name, username, position, division, govmail, contact_number, password, role) 
  VALUES  ('$employee_id', '$first_name', '$last_name', '$username', '$position', '$division', '$govmail', '$contact_number', '$password', '$role')";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo "<script>alert('SWABE!!');</script>";
  }
}
}


function list_user(){
global $conn;
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
    <td>
      <a href="list of user.php?employee_id='.$employee_id. '" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
      <button type="button" class="btn btn-warning float-right" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i> Edit </button> 

    </td>
    </tr>';
      }
    }

}
?>


<!-- Admin List of Vehicle -->

<?php
   include 'connection.php';
   function vehicle_list(){
    global $conn;

    $sql = mysqli_query($conn, "SELECT * FROM vehicles_tbl");
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
    }

?>

<!-- SUPERVISING REQUEST LIST  -->

<?php
include 'connection.php';
function admin_list_request(){
  global $conn;

$sql = mysqli_query($conn, "SELECT * FROM request_tbl WHERE reservation_status is Null");
//$sql = mysqli_query($conn, "SELECT * FROM request_tbl  WHERE reservation_status ='Checked'OR reservation_status ='Processing'");
while($row = mysqli_fetch_array($sql))
{
  


    $transaction_id =$row['transaction_id'];
    $requestor_name =$row['requestor_name'];
    $requestor_govmail=$row['requestor_govmail']; 
    $requestor_position=$row['requestor_position'];
    $requestor_division=$row['requestor_division'];
    $requestor_contact_number =$row['requestor_contact_number'];
    $region=$row['region'];
        $passenger =$row['passenger'];
        $number_of_passenger=$row['number_of_passenger'];
        $name_of_passenger =$row['name_of_passenger'];
        $office =$row ['office'];
        $raduis =$row['raduis'];
    $pickup_point=$row['pickup_point'];
    $destination =$row['destination'];
    $start_date =$row['start_date'];
    $end_date =$row['end_date'];
    $start_time =$row['start_time'];
    $end_time =$row['end_time'];
    $purpose =$row['purpose'];
    $travel_order =$row['travel_order'];
    $asigned_driver =$row['asigned_driver'];
    $reservation_status=$row['reservation_status'];

  ?>


<tr> 
    <th><?php echo $transaction_id; ?></th>
    <th><?php echo $requestor_name ; ?></th>
    <th><?php echo $passenger ; ?></th>
        <th><?php echo $number_of_passenger; ?></th>
        <th><?php echo $name_of_passenger; ?></th>
        <th><?php echo $office; ?></th>
        <th><?php echo $raduis; ?></th> 
        <th><?php echo $pickup_point; ?></th>
        <th><?php echo $destination; ?></th>
        <th><?php echo $start_date; ?></th>
        <th><?php echo $end_date; ?></th>
        <th><?php echo date('h:i a',strtotime($start_time)); ?></th>
        <th><?php echo date('h:i a',strtotime($end_time));$end_time; ?></th>
        <th><?php echo $purpose ; ?></th>
        <th><?php echo $travel_order; ?></th>
        <th><?php echo $asigned_driver; ?></th>

    <th>
      
      <?php 
        if($reservation_status == "Verified")
        {
          echo "
          <span class='badge badge-success'>Verified</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Canceled' class='btn btn-danger btn-sm '>Cancel</a>
          </th>
          ";
      
        }
        else if($reservation_status == "Approved")
        {
          echo "
          <span class='badge badge-success'>Approved</span>
          <th>
          <a href='../../includes/trip_ticket.html' class='btn btn-info btn-sm'>Trip Ticket</a>
          </th>
          
          ";
      
        } else if($reservation_status == "Pending")
        {
          echo "
          <span class='badge badge-warning'>Pending</span>
          <th>
          
          </th>
          
          ";
      
        }else if ($reservation_status == "Checked")
        {

          echo "
          <span class='badge badge-info'>Checked</span>
          <th>
            <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Initialed ' class='btn btn-warning btn-sm'>Initial</a>
          </th>
          
          ";
        }else if ($reservation_status == "Initialed")
        {

          echo "
          <span class='badge badge-primary'>Initialed</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Canceled' class='btn btn-danger btn-sm'>Cancel</a>
          </th>
          
          ";
        }
        
        else if ($reservation_status == 'Canceled')
        {
          echo "
          <span class='badge badge-danger'>Canceled</span>
          <th>
        
          </th>
          
          ";
      
        }else
        {
          echo "
          <span class='badge badge-info'>Processing</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Verified' class='btn btn-success btn-sm'>Verify</a>
          </th>
          
          ";
        }
 
      ?> 

    </th>
    
    
  </tr>

<?php }}?>

<!-- LIST OF ADMIN TOTAL REQUEST -->
<?php
include 'connection.php';
function admin_list_total_request(){
  global $conn;

$sql = mysqli_query($conn, "SELECT * FROM request_tbl");
//$sql = mysqli_query($conn, "SELECT * FROM request_tbl  WHERE reservation_status ='Checked'OR reservation_status ='Processing'");
while($row = mysqli_fetch_array($sql))
{



    $transaction_id =$row['transaction_id'];
    $requestor_name =$row['requestor_name'];
    $requestor_govmail=$row['requestor_govmail']; 
    $requestor_position=$row['requestor_position'];
    $requestor_division=$row['requestor_division'];
    $requestor_contact_number =$row['requestor_contact_number'];
    $region=$row['region'];
        $passenger =$row['passenger'];
        $number_of_passenger=$row['number_of_passenger'];
        $name_of_passenger =$row['name_of_passenger'];
        $office =$row ['office'];
        $raduis =$row['raduis'];
    $pickup_point=$row['pickup_point'];
    $destination =$row['destination'];
    $start_date =$row['start_date'];
    $end_date =$row['end_date'];
    $start_time =$row['start_time'];
    $end_time =$row['end_time'];
    $purpose =$row['purpose'];
    $travel_order =$row['travel_order'];
    $asigned_driver =$row['asigned_driver'];
    $reservation_status=$row['reservation_status'];

  ?>


<tr> 
    <th><?php echo $transaction_id; ?></th>
    <th><?php echo $requestor_name ; ?></th>
    <th><?php echo $passenger ; ?></th>
        <th><?php echo $number_of_passenger; ?></th>
        <th><?php echo $name_of_passenger; ?></th>
        <th><?php echo $office; ?></th>
        <th><?php echo $raduis; ?></th> 
        <th><?php echo $pickup_point; ?></th>
        <th><?php echo $destination; ?></th>
        <th><?php echo $start_date; ?></th>
        <th><?php echo $end_date; ?></th>
        <th><?php echo date('h:i a',strtotime($start_time)); ?></th>
        <th><?php echo date('h:i a',strtotime($end_time));$end_time; ?></th>
        <th><?php echo $purpose ; ?></th>
        <th><?php echo $travel_order; ?></th>
        <th><?php echo $asigned_driver; ?></th>

    <th>
      
      <?php 
        if($reservation_status == "Verified")
        {
          echo "
          <span class='badge badge-success'>Verified</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Canceled' class='btn btn-danger btn-sm'>Cancel</a>
          </th>
          ";
      
        }
        else if($reservation_status == "Approved")
        {
          echo "
          <span class='badge badge-success'>Approved</span>
          <th>
          <a href='../../includes/trip_ticket.html' class='btn btn-info btn-sm'>Trip Ticket</a>
          </th>
          
          ";
      
        } else if($reservation_status == "Pending")
        {
          echo "
          <span class='badge badge-warning'>Pending</span>
          <th>
          
          </th>
          
          ";
      
        }else if ($reservation_status == "Checked")
        {

          echo "
          <span class='badge badge-info'>Checked</span>
          <th>
            <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Initialed ' class='btn btn-warning btn-sm'>Initial</a>
          </th>
          
          ";
        }else if ($reservation_status == "Initialed")
        {

          echo "
          <span class='badge badge-primary'>Initialed</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Canceled' class='btn btn-danger btn-sm'>Cancel</a>
          </th>
          
          ";
        }
        
        else if ($reservation_status == 'Canceled')
        {
          echo "
          <span class='badge badge-danger'>Canceled</span>
          <th>
        
          </th>
          
          ";
      
        }else
        {
          echo "
          <span class='badge badge-info'>Processing</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Verified' class='btn btn-success btn-sm'>Verify</a>
          </th>
          
          ";
        }
  
      ?> 

    </th>
    
    
  </tr>

<?php }}?>







<!-- Admin List of Request Outside-Manila -->
<?php
include 'connection.php';
function admin_list_outside_manila_request(){
  global $conn;

$sql = mysqli_query($conn, "SELECT * FROM request_tbl WhERE reservation_status is Null");
//$sql = mysqli_query($conn, "SELECT * FROM request_tbl  WHERE reservation_status ='Checked'OR reservation_status ='Processing'");
while($row = mysqli_fetch_array($sql))
{
  if($row['raduis'] == 'Outside-Manila'){
  
    $transaction_id =$row['transaction_id'];
    $requestor_name =$row['requestor_name'];
    $requestor_govmail=$row['requestor_govmail']; 
    $requestor_position=$row['requestor_position'];
    $requestor_division=$row['requestor_division'];
    $requestor_contact_number =$row['requestor_contact_number'];
    $region=$row['region'];
        $passenger =$row['passenger'];
        $number_of_passenger=$row['number_of_passenger'];
        $name_of_passenger =$row['name_of_passenger'];
        $office =$row ['office'];
        $raduis =$row['raduis'];
    $pickup_point=$row['pickup_point'];
    $destination =$row['destination'];
    $start_date =$row['start_date'];
    $end_date =$row['end_date'];
    $start_time =$row['start_time'];
    $end_time =$row['end_time'];
    $purpose =$row['purpose'];
    $travel_order =$row['travel_order'];
    $asigned_driver =$row['asigned_driver'];
    $reservation_status=$row['reservation_status'];

  ?>


<tr> 
    <th><?php echo $transaction_id; ?></th>
    <th><?php echo $requestor_name ; ?></th>
    <th><?php echo $passenger ; ?></th>
        <th><?php echo $number_of_passenger; ?></th>
        <th><?php echo $name_of_passenger; ?></th>
        <th><?php echo $office; ?></th>
        <th><?php echo $raduis; ?></th> 
        <th><?php echo $pickup_point; ?></th>
        <th><?php echo $destination; ?></th>
        <th><?php echo $start_date; ?></th>
        <th><?php echo $end_date; ?></th>
        <th><?php echo date('h:i a',strtotime($start_time)); ?></th>
        <th><?php echo date('h:i a',strtotime($end_time));$end_time; ?></th>
        <th><?php echo $purpose ; ?></th>
        <th><?php echo $travel_order; ?></th>
        <th><?php echo $asigned_driver; ?></th>

    <th>
      
      <?php 
        if($reservation_status == "Verified")
        {
          echo "
          <span class='badge badge-success'>Verified</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Canceled' class='btn btn-danger btn-sm'>Cancel</a>
          </th>
          ";
      
        }
        else if($reservation_status == "Approved")
        {
          echo "
          <span class='badge badge-success'>Approved</span>
          <th>
          <a href='../../includes/trip_ticket.html' class='btn btn-info btn-sm'>Trip Ticket</a>
          </th>
          
          ";
      
        } else if($reservation_status == "Pending")
        {
          echo "
          <span class='badge badge-warning'>Pending</span>
          <th>
          
          </th>
          
          ";
      
        }else if ($reservation_status == "Checked")
        {

          echo "
          <span class='badge badge-info'>Checked</span>
          <th>
            <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Initialed ' class='btn btn-warning btn-sm'>Initial</a>
          </th>
          
          ";
        }else if ($reservation_status == "Initialed")
        {

          echo "
          <span class='badge badge-primary'>Initialed</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Canceled' class='btn btn-danger btn-sm'>Cancel</a>
          </th>
          
          ";
        }
        
        else if ($reservation_status == 'Canceled')
        {
          echo "
          <span class='badge badge-danger'>Canceled</span>
          <th>  
          </th> 
          ";   
        }else 
        {
          echo "
          <span class='badge badge-info'>Processing</span>
          <th>
          <a href='../../Connection/set-status-technical.php?transaction_id=$transaction_id &reservation_status=Verified' class='btn btn-success btn-sm'>Verify</a>
          </th>
          
          ";
        }
}
      ?> 

    </th>
    
    
  </tr>

<?php }}?>







<!--Motorpool Function -->

<!-- Motorpool Add Driver -->
<?php
  include 'connection.php';
function add_driver(){

global $conn;
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

        if($role=='Driver'){

          echo '<tr>
          <th scope="row">'.$first_name.' '.$last_name.'</th>
          <td>'.$position.'</td> 
            <td>'.$contact_number.'</td>
          <td>'.$division.'</td>
            |<td> 

          </td>
       
          </tr>';
        }
      }
    }
}                    
?>


<!-- Motorpool Add Vehicle -->

<?php 


function add_vehicle(){

global $conn;

if(isset($_POST['save'])){


  $plate_number=$_POST['plate_number'];
  $vehicle_model=$_POST['vehicle_model'];
  $start_odometer=$_POST['start_odometer'];
  $end_odometer=$_POST['end_odometer'];
  $assigned_driver= $_POST['assigned_driver'];
 


  $sql = "INSERT INTO vehicles_tbl (plate_number, vehicle_model, start_odometer, end_odometer, assigned_driver) 

  		  VALUES  ('$plate_number', '$vehicle_model', '$start_odometer', '$end_odometer', '$assigned_driver')";
  $result = mysqli_query($conn, $sql);
  if($result){

    echo "<script>alert('Naka Assigned kana!!');</script>";
  }
}

}


?>

<!-- Motor Vhicle Table -->

<?php
function view_vehicle(){
  global $conn;
  $sql = mysqli_query($conn, "SELECT * FROM vehicles_tbl");
  if ($sql){
      while ($row = mysqli_fetch_assoc($sql)){
      
        $plate_number =$row['plate_number'];
        $vehicle_model =$row['vehicle_model'];
        $start_odometer =$row['start_odometer']; 
        $end_odometer=$row['end_odometer'];
        $assigned_driver=$row['assigned_driver'];
        

    echo '<tr>
    <th scope="row">'.$plate_number.'</th>
    <td>'.$vehicle_model.'</td>
    <td>'.$start_odometer.'</td>
    <td>'.$end_odometer.'</td>
    <td>'.$assigned_driver.'</td>
  
    <td>

 <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Assigned</button>

    </td>
    </tr>';
      }
    }
}                    
?>






<!-- Function LOgin -->
<?php

function login(){
  global $conn;

if(isset($_POST['employee_id']) && isset($_POST['password']))
{
    $employee_id = mysqli_real_escape_string($conn,$_POST['employee_id']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if(empty($employee_id)){
        header("Location: ./login.php?error=Username is required!");
    }elseif(empty($password)){
        header("Location: ./login.php?error=Password is required!");
    
    }else{

        $sql = "SELECT * FROM users_tbl WHERE employee_id='$employee_id'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)){
            
            $row = mysqli_fetch_assoc($result);
            $role = $row['role'];
            $hash = $row['password'];
    



                if(password_verify($password, $hash) && $role == 'Supervising Admin')
                {
                    session_start();
                    $_SESSION['employee_id'] = $row['employee_id'];
                    $_SESSION['name'] = $row['first_name'] . ' '.$row['last_name'];
                    $_SESSION['role'] = $row['role'];
                    header("Location: ./Supervising Admin/admindashboard.php");
                    exit();
                }
                else if(password_verify($password, $hash) && $role == 'Chief Admin')
                {
                    session_start();
                    $_SESSION['employee_id'] = $row['employee_id'];
                    $_SESSION['name'] = $row['first_name'] . ' '.$row['last_name'];
                    $_SESSION['role'] = $row['role'];
                    header("Location: ../Chief admin/chiefadmindashboard.php");
                    exit();
                }
                else if(password_verify($password, $hash) && $role == 'Motorpool')
                {
                    session_start();
                    $_SESSION['employee_id'] = $row['employee_id'];
                    $_SESSION['name'] = $row['first_name'] . ' '.$row['last_name'];
                    $_SESSION['role'] = $row['role'];
                    header("Location: ../Motorpool/motorpooldashboard.php");
                    exit();
                }
                else if(password_verify($password, $hash) && is_null($role)){
                    session_start();
                    $_SESSION['employee_id'] = $row['employee_id'];
                    $_SESSION['name'] = $row['first_name'] . ' '.$row['last_name'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['govmail'] = $row['govmail'];
                    $_SESSION['position'] = $row['position'];
                    ?>
                    <script>window.location='../Clients/clientdashboard.php'</script>
                    <?php
                }
                else {
                    header("Location: ./login.php?error=Incorrect Username or Password!");
                    exit();
                }


        }else{
            header("Location: ./login.php?error=Incorrect Username or Password!");
            exit();
        }
    }
}

}



// Register Function 

function register(){

  global $conn;
if(isset($_POST['register'])){


  $employee_id=mysqli_real_escape_string($conn,$_POST['employee_id']);
  $first_name=mysqli_real_escape_string($conn, $_POST['first_name']);
  $last_name=mysqli_real_escape_string($conn, $_POST['last_name']);
  $username=mysqli_real_escape_string($conn, $_POST['username']);
  $position= mysqli_real_escape_string($conn,$_POST['position']);
  $division= mysqli_real_escape_string($conn,$_POST['division']);
  $govmail=mysqli_real_escape_string($conn,$_POST['govmail']);
  $contact_number=mysqli_real_escape_string($conn,$_POST['contact_number']);
  $password=password_hash($_POST['password'], PASSWORD_DEFAULT);



  $sql = "INSERT INTO users_tbl (employee_id, first_name, last_name, username, position, division, govmail, contact_number, password) 

  		  VALUES  ('$employee_id', '$first_name', '$last_name', '$username', '$position', '$division', '$govmail', '$contact_number', '$password')";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo "<script>alert('New Record Successfully Added!!');</script>";

	header("Location: ./login.php?");
}else{
    echo "<script>alert('Something went Wrong!!');</script>";
  }
}
}
?>












