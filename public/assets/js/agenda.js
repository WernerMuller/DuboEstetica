
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('agenda');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth'
  });
  calendar.render();
});
// se debe retira reste plugin