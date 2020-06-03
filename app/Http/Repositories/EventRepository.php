<?php

namespace App\Http\Repositories;

use App\Model\Event;
use App\Http\Repositories\Types\BaseRepository;

class EventRepository extends BaseRepository 
{
  protected $modelClass = Event::class;

  public function insertEvent($data){
    $event = new Event;
    $event->name = $data['name'];
    $event->date = date('Y/m/d', strtotime(str_replace("/", "-",$data['date'])));
    $event->time = $data['time'];
    try {
      $event->save();
      return $event;
    } catch(Exception $ex) {
      return new Exception($ex);
    }
  }

  public function allEvents() {
    return Event::orderBy('id')->get();
  }
}