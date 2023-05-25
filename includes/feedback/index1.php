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
    <title>Emoji Stars Rating</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
body {
  background-image: url('emojis/NMIS_LOGO.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 10%;

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
  
  </div>

<?php 
}else{
  echo "NO FEEDBACK";
}
 ?>
  

</body>
</html>