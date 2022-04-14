<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::orderBy('created_at','asc')->paginate(25);
        return view('dashboard.events.index',compact('events'));
    }


    public function create()
    {
        return view('dashboard.events.create');
    }


    public function store(Request $request)
    {
        $events = new Event();
        $events->setTranslation('title', 'en', $request->title_en)
            ->setTranslation('title', 'ar', $request->title_ar)
            ->setTranslation('title', 'fr', $request->title_fr)
            ->setTranslation('location', 'en', $request->location_en)
            ->setTranslation('location', 'ar', $request->location_ar)
            ->setTranslation('location', 'fr', $request->location_fr);
        $events->time = $request->time;
        $events->date = $request->date;
        $events->country_id = $request->country_id;
        $events->governorate_id = $request->governorate_id;
        $events->city_id = $request->city_id;
        $events->category_id = $request->category_id;
        $events->budget = $request->budget;
        $events->user_id = $request->user_id;

        $events->save();
        return redirect()->route('events.index')->with(['message' => __('admin/home.added_successfully')]);
    }


    public function edit($id)
    {
        $model = Event::findOrFail($id);
        return view('dashboard.events.edit', compact('model'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->setTranslation('title', 'en', $request->title_en)
              ->setTranslation('title', 'ar', $request->title_ar)
              ->setTranslation('title', 'fr', $request->title_fr)
              ->setTranslation('location', 'en', $request->location_en)
              ->setTranslation('location', 'ar', $request->location_ar)
              ->setTranslation('location', 'fr', $request->location_fr);
        $event->time           = $request->time;
        $event->date           = $request->date;
        $event->country_id     = $request->country_id;
        $event->governorate_id = $request->governorate_id;
        $event->city_id        = $request->city_id;
        $event->category_id    = $request->category_id;
        $event->budget         = $request->budget;
        $event->user_id        = $request->user_id;

        $event->save();
        return redirect()->route('events.index')->with(['message' => __('admin/home.edited_successfully')]);

    }


    public function destroy($id)
    {
        $events = Event::findOrFail($id);
        $events->delete();
        return redirect()->route('events.index')
            ->with(['delete' => __('admin/home.deleted_successfully')]);
    }
}
