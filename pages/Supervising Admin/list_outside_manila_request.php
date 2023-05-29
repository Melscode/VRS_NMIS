<?php include 'includes/header.php';?>
<?php include '../../includes/functions.php';?>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th class="btn-info">Transaction_ID</th>
                    <th class="btn-info">Fullname</th>
                    <th class="btn-info"> Are you the Passenger?</th>
                    <th class="btn-info"> No. of Passenger</th>
                    <th class="btn-info"> Name of Passenger</th>
                    <th class="btn-info"> Office</th>
                    <th class="btn-info"> Raduis</th>
                    <th class="btn-info"> Pick up Point</th>
                    <th class="btn-info"> Drop off Point</th>
                    <th class="btn-info"> Date Start</th>
                    <th class="btn-info"> Date End</th>
                    <th class="btn-info"> Time Start</th>
                    <th class="btn-info"> Time End</th>
                    <th class="btn-info"> Purpose</th>
                    <th class="btn-info"> Attachments</th>
                    <th class="btn-info"> Assigned Driver</th>
                    <th class="btn-info"> Status </th>
                    <th class="btn-info"> Action </th>
                  </tr>
                  </thead>

                  <tbody>
                  <?php echo admin_list_outside_manila_request();?>


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

 <?php include 'includes/footer.php';?>

 <script>

function fireSweetAlert() {
    Swal.fire(
        'Request was  Verified!',
        'You clicked the button!',
        'success'
    )
}

function cancel() {
  Swal.fire({
  title: 'Reason  for Cancelation',
  input: 'text',
  inputAttributes: {
    autocapitalize: 'off'
  },
  showCancelButton: true,
  confirmButtonText: 'Look up',
  showLoaderOnConfirm: true,
  preConfirm: (login) => {
    return fetch(`//api.github.com/users/${login}`)
      .then(response => {
        if (!response.ok) {
          throw new Error(response.statusText)
        }
        return response.json()
      })
      .catch(error => {
        Swal.showValidationMessage(
          `Request failed: ${error}`
        )
      })
  },
  allowOutsideClick: () => !Swal.isLoading()
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: `${result.value.login}'s avatar`,
      imageUrl: result.value.avatar_url
    })
  }
})
}

</script>