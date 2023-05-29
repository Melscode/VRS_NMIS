<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "nmisvr_db";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn){
    die;
    }
    if(isset($_POST['save']))
    {
              
              $transaction_id =$_GET['transaction_id'];
              $feedback_number=$_POST['feedback_number'];
              
  
          $sql = "INSERT INTO feedback_tbl(transaction_id, feedback_number) 
          VALUES  ('$transaction_id', '$feedback_number')";
    
  
          if($result  = mysqli_query($conn, $sql) ){
                sleep(3);
            header('location: ../../pages/Clients/list of request.php');
               
        }        
      }
   
?>


<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
 

  <script>
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }</script>

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
   <!-- fullcalendar -->
 <link rel="stylesheet" href="../../plugins/fullcalendar/main.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
body {
  
  background-image: url('emojis/opd.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}
.center {
  padding: 250px 0;
  text-align: center;
}
</style>
</head>
<body>
  <form method ="POST">
    <div class="center">
  <div class="wrapper">
    <input type="radio" name="feedback_number" id="star-1" value="1">
    <input type="radio" name="feedback_number" id="star-2" value="2">
    <input type="radio" name="feedback_number" id="star-3" value="3">
    <input type="radio" name="feedback_number" id="star-4" value="4">
    <input type="radio" name="feedback_number" id="star-5" value="5">
    <div class="content">
      <div class="outer">
        <div class="emojis">
          <li class="slideImg"><img src="emojis/emoji-1.png" alt=""></li>
          <li><img src="emojis/emoji-2.png" alt=""></li>
          <li><img src="emojis/emoji-3.png" alt=""></li>
          <li><img src="emojis/emoji-4.png" alt=""></li>
          <li><img src="emojis/emoji-5.png" alt=""></li>
        </div>
      </div>
      <div class="stars">
        <label for="star-1" class="star-1 fas fa-star"></label> 
        <label for="star-2" class="star-2 fas fa-star"></label>
        <label for="star-3" class="star-3 fas fa-star"></label>
        <label for="star-4" class="star-4 fas fa-star"></label>
        <label for="star-5" class="star-5 fas fa-star"></label>
      </div>
    </div>
    <div class="footer">
      <span class="text"></span>
      <span class="numb"></span>
    </div>
    
    </div>
<!--     
						<br> <center><select name="feedback_number" class="form-control" required>
								<option  value=""></option>
									<option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
							</select>
  -->
  
   <br> <button type="submit" class="btn btn-success " name = 'save' onclick="add()"> Submit</button></center>	     
   </div>
</form>
</body>
</html>


<script>

function add() {
    Swal.fire(
        'Feedback  was  Submitted!',
        'You clicked the button!',
        'success'
    )
}

</script>
