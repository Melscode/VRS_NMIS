
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
  $requestor_name = $row['requestor_name'];
  $requestor_position = $row['requestor_position'];
  $requestor_contact_number = $row['requestor_contact_number'];
  $requestor_division = $row['requestor_division'];
  $destination = $row['destination'];
  $start_date = $row['start_date'];
  $end_date = $row['end_date'];
  $start_time = $row['start_time'];
  $purpose = $row['purpose'];
}




?>

<div class="card card-default container-fluid">

        <form  method="POST" id="update_request">
        <?php assign_driver();?>

          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                  <label>Requestor Name </label>
                  <input type="text" class="form-control" name="requestor_name" value="<?php echo $requestor_name; ?>" disabled>
              </div>
              <!-- /.col -->
            <div class="col-md-3">
                  <label>Requestor Position</label>
                  <input type="text" class="form-control" name="requestor_name" value="<?php echo $requestor_position; ?>" disabled>
              </div>
              <!-- /.col -->

            <div class="col-md-3">
                  <label>Requestor Division</label>
                  <input type="text" class="form-control" name="requestor_name" value="<?php echo $requestor_division; ?>" disabled>
              </div>
              <!-- /.col -->

              <div class="col-md-3">
                 <label>Requestor Contact Number</label>
                 <input type="text" class="form-control" name="requestor_name" value="<?php echo $requestor_contact_number; ?>" disabled>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-md-3">
                  <label>Destination</label>
                  <input type="text" class="form-control" name="requestor_name" value="<?php echo $destination; ?>" disabled>
              </div>
              <!-- /.col -->
            <div class="col-md-3">
                  <label>Travel Start Date</label>
                  <input type="text" class="form-control" name="requestor_name" value="<?php echo $start_date; ?>" disabled>
              </div>
              <!-- /.col -->

              <div class="col-md-3">
                  <label>Travel End Date</label>
                  <input type="text" class="form-control" name="requestor_name" value="<?php echo $end_date; ?>" disabled>
              </div>
              <!-- /.col -->

              <div class="col-md-3">
                  <label>Travel Start Time</label>
                  <input type="text" class="form-control" name="requestor_name" value="<?php echo date('H:i a',strtotime($start_time)); ?>" disabled>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-3">
              <label>Travel Purpose</label>
                  <input type="text" class="form-control travel_purpose" name="requestor_name" value="<?php echo $purpose; ?>" disabled>
              </div>


              <div class="col-md-3">
              <label>Select Driver</label>
              <select name="asigned_driver" id="asigned_driver" class="form-control driver">
                  <option  value="">--Choose Driver--</option>
									            <?php echo all_driver();?>
            </select>
              </div>
            </div>
            <br>

            <div class="row">
            <div class="col-md-4">
            <button type="submit" class="btn btn-success add-btn" name="update id" id="delete" onclick="add()">Update Request</button>
            </div>

            </div>
            <input type="hidden" name="transaction_id" id="transaction_id" value="<?php echo $transaction_id; ?>">
            <input type="hidden" name="update" id="update" value="update">
        </form>


      <?php include 'includes/footer.php'; ?>

 <script>
$(function(){



        $('.add-btn').click( e=> { 

          e.preventDefault();
          $.ajax({
            type : 'POST',
            url : 'assigned driver.php',
            data : $('#update_request').serialize(),
            success : function(res){
              alert('sample')

    e.preventDefault();
    alert('sample')
            },
            error : function(resp){
              // console.log(resp)
            }
          })

  })
})
    </script>  

<script>

function add() {
    Swal.fire(
        'Assigned Driver!',
        'You clicked the button!',
        'success'
    )
}

</script>

      
