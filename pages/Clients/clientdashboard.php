<?php
session_start();
?>
<?php include 'includes/header.php';   ?>
<?php include "../../includes/functions.php";?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php 
                echo total_request();   
              ?>
              </div>
           
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="list of request.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <?php echo add_request();?>



      
       <div class="modal fade" role="dialog" id="addrequestModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header btn-success">
              <h3 class="modal-title ">Add Request</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form  method="POST">

            <div class="modal-body ">
              <div class="row">
                <div class="col-sm">
              <center><h4 class="btn-info">Requester's Information</h4> <br></center>

              <div class="form-input">
							<select name="requestor_division" class="form-control">
								<option  id= "division" value="">--Select Division--</option>
									<option value="Laboratory">Laboratory</option>
									<option value="POSMD">POSMD</option>
									<option value="MIED" >MIED</option>
									<option value="Cashier">Cashier</option>
									<option value="Engineering">Engineering</option>
									<option value="ARD">ARD</option>
									<option value="Property">Property</option>
									<option value="Records">Records</option>
									<option value="OED">OED</option>
									<option value="HRM">HRM</option>
									<option value="PIMD">PIMD</option>
									<option value="Admin">Admin</option>
									<option value="BAC">BAC</option>
									<option value="Accounting">Accounting</option>
							</select>
						</div><br>

              <div class="form-group">
                <input type="text" name="requestor_contact_number" class="form-control" placeholder="Contact Number">
              </div> 
              
              

              <div class="form-group">
                <input type="text" name="region" class="form-control" placeholder="Region">
              </div>

                <h6>Are you the Passenger?</h6>
              <div class="form-input">
							<select name="passenger" class="form-control" required>
								<option  value=""></option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
							</select>
						</div><br>

            <center><h4 class= "btn-info">Passenger's Information</h4> <br></center>

            <h6>No. of Passengers :</h6>
            <div class="form-group">
                <input type="number" name="number_of_passenger" class="form-control" placeholder="No." required>
              </div>

              <h6>Name of Passengers :</h6>
            <div class="form-group">
                <input type="text" name="name_of_passenger" class="form-control" placeholder="Name" required>
              </div>

              <h6 >Office (RTOC/Division/Unit/Section) :</h6>
            <div class="form-group">
                <input type="text" name="office" class="form-control" placeholder="Office" required>
              </div>


              <h6>KIlometer Raduis:</h6>
              <div class="form-input">
							<select name="raduis" class="form-control" required>
								<option  value=""></option>
									<option value="Within-Manila">Within Manila</option>
									<option value="Outside-manila"> Outside Manila</option>
							</select>
						</div><br>
</div>
              <div class="col-sm">
              <center><h4 class= "btn-info">Trip Information</h4> <br></center>
              <h6>Source/ Pick up point :</h6>
              <div class="form-group">
                <input type="text" name="pickup_point" class="form-control" placeholder="Pickup Point" required>
              </div>

              <h6>Destenation/ Drop Off Point</h6>
              <div class="form-group">
                <input type="text" name="destination" class="form-control" placeholder="Destination" required>
              </div>
                
              <h6>From: Date of Trip : </h6>
              <div class="form-group">
                <input type="date" name="start_date" class="form-control" placeholder="Start Date" required>
              </div>

               <h6>To: Date of Trip :</h6>
              <div class="form-group">
                <input type="date" name="end_date" class="form-control" placeholder="End Date" required>
              </div>

              <h6>Depature Time :</h6>
              <div class="form-group">
                <input type="time" name="start_time" class="form-control" placeholder="Start Time" required>
              </div>

              <h6>Estimated Return Time</h6>
              <div class="form-group">
                <input type="time" name="end_time" class="form-control" placeholder="End Time" required>
              </div>

              <h6>Purpose of Trip</h6>
              <div class="form-input">
							<select name="purpose" class="form-control" required>
								<option  value=""></option>
									<option value="Seminar/ Meeting">Seminar/ Meeting</option>
									<option value="Financial Matters">Financial Matters</option>
                  <option value="Skeletal Workforce">Skeletal Workforce</option>
                  <option value="Canvass/ Purchase">Canvass/ Purchase</option>
                  <option value="Enforcement">Enforcement</option>
                  <option value="Monitoring">Monitoring</option> 
                  <option value="others">Others</option> 
							</select>
						  </div><br>
            
              <h6>Attachments: Gate pass/ Locator Travel Order/Notice of Meeting /Memo / Email Invite (if available)</h6>
              <div class="form-group">
                <input type="file" name="travel_order" class="form-control" placeholder="Travel Order">
              </div>

            </div>
          </div>

          
            <div class="modal-footer">
              <button type="submit" class="btn btn-success  swalDefaultSuccess" name = 'save' > Add Request</button>
            
            </div>
          </div>
        </div>
       </div>        
</div>
<!---add calendar--->

    <!-- Content Header (Page header) -->
   
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
 
   
      <!-- Main content -->
      
        <div class="row">
          <div class="col-md-2">
              <div class="card">
                <div class="card-header">
        <center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addrequestModal"><i class="fas fa-plus"></i> Add Request</button></center> 
                </div>
                  <!-- /btn-group -->
                  <div class="input-group">
                    <div class="input-group-append">
                    </div>
                    <!-- /btn-group -->
                  </div>
                  <!-- /input-group -->
                </div>
          

              <div class="card">
                  <!-- the events -->
                  <div id="external-events">
                </div>
                <!-- /.card-body -->
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->


<?php include 'includes/footer.php';?>


<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      //Random default events
      events: [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc', //Primary (light-blue)
          allDay         : true
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc', //Primary (light-blue)
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc', //Primary (light-blue)
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc', //Primary (light-blue)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc', //Primary (light-blue)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'https://www.google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })
  })
</script>


<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: false,
      position: 'top',
      showConfirmButton: true,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Your Request was Successfully submitted.!'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'Please fillup the required fields.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        icon: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultTopLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'topLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomRight').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomRight',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultAutohide').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        autohide: true,
        delay: 750,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultNotFixed').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        fixed: false,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultFull').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        icon: 'fas fa-envelope fa-lg',
      })
    });
    $('.toastsDefaultFullImage').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        image: '../../dist/img/user3-128x128.jpg',
        imageAlt: 'User Picture',
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultMaroon').click(function() {
      $(document).Toasts('create', {
        class: 'bg-maroon',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });
</script>