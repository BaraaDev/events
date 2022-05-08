<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function events()
    {
        $events = Event::status('Available')->all();
        return view('website.events.index',compact('events'));
    }

    public function show($id)
    {
        $event = Event::
    }
}
