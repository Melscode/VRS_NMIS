
<?php include "../../includes/functions.php"; ?>


<?php include 'includes/header.php'; ?>


 <?php 

session_start();
$transaction_id = $_SESSION['transaction_id'];
$sql = "SELECT * FROM request_tbl WHERE transaction_id = '$transaction_id'";
$result=mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
  $transaction_id = $row['transaction_id'];
}




?>


<center><div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Assign </b>Driver</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"></p>

      <?php assign_driver();?>
    
      <form method="POST">

      <div class="input-group mb-3">

      <input type="text" class="form_control" name="transaction_id" value="<?php echo $transaction_id; ?>" >

      </div>


        <div class="input-group mb-3">
          <select name="asigned_driver" class="form-control">
                  <option  value="">--Choose Driver--</option>
									  <?php echo all_driver();?>
            </select>

        </div>
      
       
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success add-btn" name="update">Assigned</button>

          </div>

           
           <a href="../Motorpool/list of request.php">Cancel</a>
           </label>
          <!-- /.col -->
        </div>
      </form>
</center>
  

      <?php include 'includes/footer.php'; ?>
