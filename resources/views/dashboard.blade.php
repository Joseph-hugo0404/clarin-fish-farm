<!DOCTYPE html>
<html>
<head>
    <title style="background-image: ('images/bfar2.png')">Fish Management System</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
</head>
<body>
    @guest

    <!--<h1 class="mt-4 mb-5 text-center">Clarin Freshwater Fish Farm Record Management System</h1>-->

    @yield('content')

    @else

    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap5.min.css')}}">
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="{{asset('/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">


    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('js/jquery.printPage.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <!--<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        

    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/all.min.css')}}">-->


                                  

                @yield('content')

    @endguest
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
        
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('js/datatables-simple-demo.js')}}"></script>

    <script type="text/javascript">
  
        $(document).ready(function () {
              
            /*------------------------------------------
            --------------------------------------------
            Get Site URL
            --------------------------------------------
            --------------------------------------------*/
            var SITEURL = "{{ url('/') }}";
            
            /*------------------------------------------
            --------------------------------------------
            CSRF Token Setup
            --------------------------------------------
            --------------------------------------------*/
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
              
            /*------------------------------------------
            --------------------------------------------
            FullCalender JS Code
            --------------------------------------------
            --------------------------------------------*/
            var calendar = $('#calendar').fullCalendar({
                            editable: true,
                            events: SITEURL + "/dashboard",
                            displayEventTime: false,
                            editable: true,
                            eventRender: function (event, element, view) {
                                if (event.allDay === 'true') {
                                        event.allDay = true;
                                } else {
                                        event.allDay = false;
                                }
                            },
                            selectable: true,
                            selectHelper: true,
                            select: function (start, end, allDay) {
                                var title = prompt('Event Title:');
                                if (title) {
                                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                                    $.ajax({
                                        url: SITEURL + "/calendar-crud-ajax",
                                        data: {
                                            title: title,
                                            start: start,
                                            end: end,
                                            type: 'add'
                                        },
                                        type: "POST",
                                        success: function (data) {
                                            displayMessage("Event Created Successfully");
          
                                            calendar.fullCalendar('renderEvent',
                                                {
                                                    id: data.id,
                                                    title: title,
                                                    start: start,
                                                    end: end,
                                                    allDay: allDay
                                                },true);
          
                                            calendar.fullCalendar('unselect');
                                        }
                                    });
                                }
                            },
                            eventDrop: function (event, delta) {
                                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
          
                                $.ajax({
                                    url: SITEURL + '/calendar-crud-ajax',
                                    data: {
                                        title: event.title,
                                        start: start,
                                        end: end,
                                        id: event.id,
                                        type: 'update'
                                    },
                                    type: "POST",
                                    success: function (response) {
                                        displayMessage("Event Updated Successfully");
                                    }
                                });
                            },
                            eventClick: function (event) {
                                var deleteMsg = confirm("Do you really want to delete?");
                                if (deleteMsg) {
                                    $.ajax({
                                        type: "POST",
                                        url: SITEURL + '/calendar-crud-ajax',
                                        data: {
                                                id: event.id,
                                                type: 'delete'
                                        },
                                        success: function (response) {
                                            calendar.fullCalendar('removeEvents', event.id);
                                            displayMessage("Event Deleted Successfully");
                                        }
                                    });
                                }
                            }
         
                        });
         
            });
              
            /*------------------------------------------
            --------------------------------------------
            Toastr Success Code
            --------------------------------------------
            --------------------------------------------*/
            function displayMessage(message) {
                toastr.success(message, 'Event');
            } 
        </script>
</body>
</html>
