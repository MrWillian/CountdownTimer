<div class="content">
  <h3 id="event_name" class="title text-center">
    {{$selectedEvent != null ? $selectedEvent->name : 'Nome do Evento'}}
  </h3>
  
  <input 
    type="hidden" 
    id="event-time"
    name="event-time" 
    class="event-time"
    value="{{ $selectedEvent != null ? ($selectedEvent->date . ' ' . $selectedEvent->time) : null }}" />
  
  <div id="countdown" class="col-md-12">
    <div id="day_container" class="column col-md-13">
      <h3 class="label-days"></h3>
      <h4 class="label-countdown">Dia(s)</h4>
    </div>
    <div id="hour_container" class="column col-md-13">
      <h3 class="label-hours"></h3>
      <h4 class="label-countdown">Hora(s)</h4>
    </div>
    <div id="minute_container" class="column col-md-13">
      <h3 class="label-minutes"></h3>
      <h4 class="label-countdown">Minuto(s)</h4>
    </div>
    <div id="second_container" class="column col-md-13">
      <h3 class="label-seconds"></h3>
      <h4 class="label-countdown">Segundo(s)</h4>
    </div>
  </div>

  <button id="new" type="submit" class="btn btn-success btn-lg btn-layout"
    onclick="window.location='/event/create';" >
    Novo Evento
  </button>
</div>