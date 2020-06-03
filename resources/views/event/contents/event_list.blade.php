<div class="content">
  <h3 class="title text-center">Eventos</h3>
  <ul class="list-group">
    @foreach($events as $event)
      <li class="list-group-item">
        <a class="event_name" href="#"
          event="{{$event->name}}" 
          date="{{$event->date}} {{$event->time}}">
          {{$event->name}} - {{date('d-m-Y', strtotime($event->date))}} {{$event->time}}
        </a>
      </li>
    @endforeach
  </ul>
</div>