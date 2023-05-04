<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "nmisvr_db";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn){
    die;
//}else{
    //die ("CHAMBA!!!!");
    }
?>