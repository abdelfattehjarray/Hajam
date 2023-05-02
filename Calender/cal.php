<!DOCTYPE html>
<html>
<head>
  <title>Calendrier du fonctionnement de Hajam</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css" />
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#calendar').fullCalendar({
        events: 'get_events.php'
      });
    });
  </script>
</head>
<body>
  <h1>Calendario de tareas</h1>
  <div id='calendar'></div>
</body>
</html>