<?php include 'includes/header.php';?>
<?php include '../../includes/functions.php';?>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th class="btn-info">Transaction_ID <br><br></th>
                    <th class="btn-info">Fullname <br><br></th>
                    <th class="btn-info"> Are you the Passenger?</th>
                    <th class="btn-info"> No. of Passenger</th>
                    <th class="btn-info"> Name of Passenger</th>
                    <th class="btn-info"> Office<br><br></th>
                    <th class="btn-info"> Raduis<br><br></th>
                    <th class="btn-info"> Pick up Point</th>
                    <th class="btn-info"> Drop off Point</th>
                    <th class="btn-info"> Date Start</th>
                    <th class="btn-info"> Date End</th>
                    <th class="btn-info"> Time Start</th>
                    <th class="btn-info"> Time End</th>
                    <th class="btn-info"> Purpose<br><br></th>
                    <th class="btn-info"> Attachments<br><br></th>
                    <th class="btn-info"> Assigned Driver</th>
                    <th class="btn-info"> Status<br><br></th>
                    <th class="btn-info"> Action<br><br></th>
                  </tr>
                  </thead>

                  <tbody>
                  <?php echo motorpool_list_dispatch_request();?>


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

 <?php include 'includes/footer.php';?>
 <script>

function cancel() {
    Swal.fire(
        'Ready to Travel!',
        'You clicked the button!',
        'error'
    )
}

</script>
