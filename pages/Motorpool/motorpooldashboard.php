<?php include 'includes/header.php'; ?>

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
                  $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');

                  $query = "SELECT * FROM request_tbl WHERE reservation_status='Verified'";
                  $query_execute = mysqli_query($conn, $query);     
                  
                  $row = mysqli_num_rows($query_execute);
                  echo "<p>Reservation Request for Assigning Driver</p>";
                  echo "<h3>$row</h3>"; 
                ?>

                   </div>
                 <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="list of request.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         <!--end Reservation Requests-->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              
            <?php   
              $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');

              $query = 'SELECT id FROM users_tbl ORDER BY Id';
              $query_execute = mysqli_query($conn, $query);     
              
              $row = mysqli_num_rows($query_execute);
              echo "<p>Drivers</p>";
              echo "<h3>$row</h3>"; 
            ?>
                
                     </div>
                   <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
           <a href="list of driver.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             </div>
                </div>
                   <!--end Driver-->
                    <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner">
              <?php 
                $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');

                $query = 'SELECT id FROM vehicles_tbl ORDER BY Id';
                $query_execute = mysqli_query($conn, $query);     
                
                $row = mysqli_num_rows($query_execute);
                echo "<p>Vehicles</p>";
                echo "<h3>$row</h3>";  
              ?>


                     </div>
                  <div class="icon">
                <i class="ion ion-person-add"></i>
             </div>
          <a href="list of vehicle.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
              </div>
               <!--end Vehicle-->
                 <!-- ./col -->
                   <div class="col-lg-3 col-6">
                     <!-- small box -->
                       <div class="small-box bg-info">
                          <div class="inner">


              <?php
                $conn = mysqli_connect('localhost', 'root', '', 'nmisvr_db');

                $query = "SELECT * FROM request_tbl WHERE reservation_status='Approved'";
                $query_execute = mysqli_query($conn, $query);     
                
                $row = mysqli_num_rows($query_execute);
                echo "<p>Approved Request</p>";
                echo "<h3>$row</h3>"; 
              ?>


              </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                    </div>
                      <a href="list of approved request.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                           </div>
                         <!-- ./col -->
                           </div>
                             <!--end User-->

<!---add calendar--->

    <!-- Content Header (Page header) -->
 
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
</div>
   
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-2">
            <div class="sticky-top md-2 ">

              <div class="">
              <!-- <div class="card-footer "> -->
<!-- <center><div class=""></h3>
         <button type="button" class="btn btn-success float-md-none" data-toggle="modal" data-target="#addrequestModal"><i class="fas fa-plus"></i> Add Request</button>
        </div></center> -->
       </div>

                
                  <div class="" style="width: 50%; bottom: 1px;">
                    
                  <div class="input-group">
                    

                   
                    <!-- /btn-group -->
                  </div>
                  <!-- /input-group -->
                </div>
              </div>

              <div class="card">
                
                <div class="">
                  <!-- the events -->
                  <div id="external-events">
                     <div class="">
                   
                     
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>

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