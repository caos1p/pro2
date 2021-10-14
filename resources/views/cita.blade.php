@extends('home')

@section('contenido')
<div id='calendar'></div>
@endsection
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {

  initialView: 'dayGridWeek'
    });
    calendar.render();
  });

</script>