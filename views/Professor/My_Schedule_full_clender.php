<!DOCTYPE html>

<html>

<head>

    <title>My Admissions Key</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />

<!--     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" /> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <style type="text/css">
        .fc-button-group {
    display: flex;
}
button.fc-today-button.fc-button.fc-state-default.fc-corner-left.fc-corner-right.fc-state-disabled {
    position: relative;
    bottom: 32px;
    left: 90px;
}
.fc-event, .fc-event-dot {
    background-color: yellow;
}
    </style>

    <script>

    $(document).ready(function(){

        var calendar = $('#calendar').fullCalendar({

            editable:true,

            header:{

                left:'prev,next today',

                center:'title',

                right:'month,agendaWeek,agendaDay,list'

            },

            events:"<?php echo base_url(); ?>Professor/load",

            selectable:true,

            selectHelper:true,

            select:function(start, end, allDay)

            {

                var title = prompt("Enter Event Title");

                if(title)

                {

                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");

                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                    $.ajax({

                        url:"<?php echo base_url(); ?>Professor/insert",

                        type:"POST",

                        data:{title:title, start:start, end:end},

                        success:function()

                        {

                            calendar.fullCalendar('refetchEvents');

                            alert("Added Successfully");

                        }

                    })

                }

            },

            editable:true,

            eventResize:function(event)

            {

                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");

                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");



                var title = event.title;



                var id = event.id;



                $.ajax({

                    url:"<?php echo base_url(); ?>Professor/update",

                    type:"POST",

                    data:{title:title, start:start, end:end, id:id},

                    success:function()

                    {

                        calendar.fullCalendar('refetchEvents');

                        alert("Event Update");

                    }

                })

            },

            eventDrop:function(event)

            {

                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");

                //alert(start);

                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

                //alert(end);

                var title = event.title;

                var id = event.id;

                $.ajax({

                    url:"<?php echo base_url(); ?>Professor/update",

                    type:"POST",

                    data:{title:title, start:start, end:end, id:id},

                    success:function()

                    {

                        calendar.fullCalendar('refetchEvents');

                        alert("Event Updated");

                    }

                })

            },

            eventClick:function(event)

            {

                if(confirm("Are you sure you want to remove it?"))

                {

                    var id = event.id;

                    $.ajax({

                        url:"<?php echo base_url(); ?>Professor/delete",

                        type:"POST",

                        data:{id:id},

                        success:function()

                        {

                            calendar.fullCalendar('refetchEvents');

                            alert('Event Removed');

                        }

                    })

                }

            }

        });

    });

             

    </script>

</head>

    <body>

        <article>

        <div class="container">

            <div id="calendar"></div>

            <div id="demo-content"></div>

        </div>

        </article>

    </body>

</html>