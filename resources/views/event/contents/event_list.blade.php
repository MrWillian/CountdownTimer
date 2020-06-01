<div class="content">
  <h3 class="title text-center">Eventos</h3>
  <ul class="list-group">
    @foreach($events as $event)
      <li class="list-group-item">
        <a class="event_name" href="#">
          {{$event->name}} - {{$event->date}} {{$event->time}}
        </a>
      </li>
    @endforeach
  </ul>
</div>