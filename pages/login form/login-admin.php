<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "nmisvr_db";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn){
    die;

    }
?>

<?php

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
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['role'] = $row['role'];
                    header("Location: ../Supervising Admin/admindashboard.php");
                    exit();
                }
                else if(password_verify($password, $hash) && $role == 'Chief Admin')
                {
                    session_start();
                    $_SESSION['employee_id'] = $row['employee_id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['role'] = $row['role'];
                    header("Location: ../Chief admin/chiefadmindashboard.php");
                    exit();
                }
                else if(password_verify($password, $hash) && $role == 'Motorpool')
                {
                    session_start();
                    $_SESSION['employee_id'] = $row['employee_id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['role'] = $row['role'];
                    header("Location: ../Motorpool/motorpooldashboard.php");
                    exit();
                }
                else if(password_verify($password, $hash) && is_null($role)){
                    session_start();
                    $_SESSION['employee_id'] = $row['employee_id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['role'] = $row['role'];
                    header("Location: ../Clients/clientdashboard.php");
                    exit();
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


?>