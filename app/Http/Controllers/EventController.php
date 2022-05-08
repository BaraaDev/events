<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::status('Available')->get();
        return view('website.events.index',compact('events'));
    }

    public function show($id)
    {
        $event = Event::status('Available')->findOrFail($id);
        return view('website.events.show',compact('event'));
    }
}
