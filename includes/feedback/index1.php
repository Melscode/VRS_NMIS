<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "nmisvr_db";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

?>


<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="style.css">
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
<?php
$transaction_id =$_GET['transaction_id'];
$sql ="SELECT * FROM feedback_tbl WHERE transaction_id ='$transaction_id'";
$res = mysqli_query($conn,  $sql);

$row=mysqli_fetch_array($res);

if($row['feedback_number'] == '1'){
 
  // echo "<img src='emojis/emoji-1.png' >"; 
?>  <div class="wrapper">
  <div class="center">
  <input type="radio" name="rate" id="star-1">
  <!-- <input type="radio" name="rate" id="star-2">
  <input type="radio" name="rate" id="star-3">
  <input type="radio" name="rate" id="star-4">
  <input type="radio" name="rate" id="star-5"> -->
  <div class="content">
    <div class="outer">
      <div class="emojis">
        <li class="slideImg"><img src="emojis/emoji-1.png" alt=""></li>
        <!-- <li><img src="emojis/emoji-2.png" alt=""></li>
        <li><img src="emojis/emoji-3.png" alt=""></li>
        <li><img src="emojis/emoji-4.png" alt=""></li>
        <li><img src="emojis/emoji-5.png" alt=""></li> -->
      </div>
    </div>
    <div class="stars">
      <label for="star-1" class="star-1 fas fa-star"></label> 
      <!-- <label for="star-2" class="star-2 fas fa-star"></label>
      <label for="star-3" class="star-3 fas fa-star"></label>
      <label for="star-4" class="star-4 fas fa-star"></label>
      <label for="star-5" class="star-5 fas fa-star"></label> -->
    </div>
  </div>
  <div class="footer">
    <span class="text"></span>
    <span class="numb"></span>
  </div>
  <center><a href='../../pages/Clients/list of request.php' class='btn btn-info btn-sm'>BACK</a></center><br>
  </div>

<?php 
}else if($row['feedback_number'] == '2'){
 
  // echo "<img src='emojis/emoji-1.png' >"; 
?>  <div class="wrapper">
 
  <input type="radio" name="rate" id="star-2">

  <div class="content">
    <div class="outer">
      <div class="emojis">
     
    <li><img src="emojis/emoji-2.png" alt=""></li>
      
      </div>
    </div>
    <div class="stars">
      
    <label for="star-2" class="star-2 fas fa-star"></label>
      
    </div>
  </div>
  <div class="footer">
    <span class="text"></span>
    <span class="numb"></span>
  </div>
  <center><a href='../../pages/Clients/list of request.php' class='btn btn-info btn-sm'>BACK</a></center><br>
  </div>

<?php 
}else if($row['feedback_number'] == '3'){
 
  // echo "<img src='emojis/emoji-1.png' >"; 
?>  <div class="wrapper">
 
  <input type="radio" name="rate" id="star-3">

  <div class="content">
    <div class="outer">
      <div class="emojis">
     
    <li><img src="emojis/emoji-3.png" alt=""></li>
      
      </div>
    </div>
    <div class="stars">
      
    <label for="star-3" class="star-3 fas fa-star"></label>
      
    </div>
  </div>
  <div class="footer">
    <span class="text"></span>
    <span class="numb"></span>
  </div>
  <center><a href='../../pages/Clients/list of request.php' class='btn btn-info btn-sm'>BACK</a></center><br>
  </div>

<?php 
}else if($row['feedback_number'] == '4'){
 
  // echo "<img src='emojis/emoji-1.png' >"; 
?>  <div class="wrapper">
 
  <input type="radio" name="rate" id="star-4">

  <div class="content">
    <div class="outer">
      <div class="emojis">
     
    <li><img src="emojis/emoji-4.png" alt=""></li>
      
      </div>
    </div>
    <div class="stars">
      
    <label for="star-4" class="star-4 fas fa-star"></label>
      
    </div>
  </div>
  <div class="footer">
    <span class="text"></span>
    <span class="numb"></span>
  </div>
  <center><a href='../../pages/Clients/list of request.php' class='btn btn-info btn-sm'>BACK</a></center><br>
  </div>

<?php 
}
else if($row['feedback_number'] == '5'){
 
  // echo "<img src='emojis/emoji-1.png' >"; 
?>  <div class="wrapper">

  <input type="radio" name="rate" id="star-5">

  <div class="content">
    <div class="outer">
      <div class="emojis">
     
    <li><img src="emojis/emoji-5.png" alt=""></li>
      
      </div>
    </div>
    <div class="stars">
      
    <label for="star-5" class="star-5 fas fa-star"></label>
      
    </div>
  </div>
  <div class="footer">
    <span class="text"></span>
    <span class="numb"></span>
  
   
  </div> 
  <center><a href='../../pages/Clients/list of request.php' class='btn btn-info btn-sm'>BACK</a></center><br>
  
  </div>
  </div>

<?php 
}else{

}
 ?>
  
</body>
</html>