<?php
  include_once "../Connection/conn.php";

if(isset($_POST['update'])){
    
  $name=$_POST['name'];
  $address=$_POST['address'];
  $contact=$_POST['contact'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $plan=$_POST['plan'];
  $file=$_POST['file'];
 

  $sql = "UPDATE SET tbl_sub (name, address, contact, username, password, plan, file, date) VALUES ('$name', '$address', '$contact', '$username', '$password', '$plan', '$file', NOW())";
  $result=mysqli_query($conn, $sql);
  if($result){
    echo "<script>alert('Update The Record Successfully!!');</script>";
  }else{
    echo "<script>alert('Something went Wrong!!');</script>";
  }
}
?>