@extends('layouts.event')

@section('body_content')
  <div class="justify-content-center align-items-center container">

    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        @include('event.contents.form')
      </div>
    </div>

  </div>
@endsection