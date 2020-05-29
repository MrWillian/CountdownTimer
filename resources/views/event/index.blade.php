@extends('layouts.event')

@section('body_content')
  <div class="justify-content-center align-items-center container">

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        @include('event.contents.show')

        @include('event.contents.event_list')
      </div>
    </div>

  </div>

@endsection