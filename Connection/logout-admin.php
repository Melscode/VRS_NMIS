<?php 

include_once "./conn.php";

session_start();

if(isset($_SESSION['username'])){
    session_unset();
    session_destroy();
    header("Location: ../admin/index.php?logout=Logout Success!");
    exit();
}

?>