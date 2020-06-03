<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agenda de Eventos</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
</head>
<body>

  @yield('body_content')

</body>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  
  <script type="text/javascript">
    $(document).ready(function(){
      $('#name').focus();
      $('#date').mask('00/00/0000');
      $('#time').mask('00:00:00');

      calculateTime($('#event-time').val());

      $('.event_name').click(function({ target }) {
        $('#event-time').val($(target).attr('date'));
        $('#event_name').html($(target).attr('event'));
        calculateTime($('#event-time').val());
      });
    });

    var eventTime = $('#event-time').val();
    var date;
    var now = new Date(); 
    var newYear = new Date('1.1.2020').getTime();
    var startTimer = '';

    function calculateTime(dates) {
      clearInterval(startTimer);
      
      if(typeof(dates) == 'undefined'){
        date = new Date(newYear).getTime();
      }else {
        date = new Date(dates).getTime();
      }
      
      updateTimer(date);

      startTimer = setInterval(function() { updateTimer(date); }, 1000);
    }

    function updateTimer(date) {
      var now = new Date().getTime();
      var distance = date - now;

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      $('.label-days').html(days);
      $('.label-hours').html(hours);
      $('.label-minutes').html(minutes);
      $('.label-seconds').html(seconds);

      if(distance < 0){
        clearInterval(startTimer);
        $('#event_name').html($('#event_name').html() + ' - CONCLUÍDO');
      }
    }

  </script>
</html>
