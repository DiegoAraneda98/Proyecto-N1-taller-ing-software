

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    
    headerToolbar:{
        left:'prev,next today',
        center:'title',
        right:'dayGridMonth,dayGridWeek,dayGridDay'
    },
    locale:"es",
    selectable: true, // Habilitar la selección de fechas
 
    events: [ // Puedes cargar eventos existentes aquí
      {
        title: 'Evento existente',
        start: '2023-11-30',
        color: 'green'
      }
    ]
  });
  calendar.render();


  window.agregarEvento = function() {
    var eventName = document.getElementById('eventName').value;
    var eventDate = document.getElementById('eventDate').value;
    var eventColor = document.getElementById('eventColor').value;

    if (eventName && eventDate && eventColor) {
      calendar.addEvent({
        title: eventName,
        start: eventDate,
        color: eventColor
      });

      // Limpiar los campos después de agregar el evento
      document.getElementById('eventName').value = '';
      document.getElementById('eventDate').value = '';
      document.getElementById('eventColor').value = '';
    } else {
      alert('Por favor, complete todos los campos.');
    }
  };
});


