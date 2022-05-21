<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Event;
use App\Models\Governorate;
use App\Models\Tag;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::status('Available')->paginate(12);
        return view('website.events.index',compact('events'));
    }

    public function category($id)
    {
        $category     = Category::status(1)->findOrFail($id);
        $events       = Event::status('Available')->where('category_id',$category->id)->paginate(12);
        return view('website.events.index',compact('events'));
    }

    public function country($id)
    {
        $country          = Country::findOrFail($id);
        $events           = Event::status('Available')->where('country_id',$country->id)->paginate(12);
        return view('website.events.index',compact('events'));
    }

    public function governorate($id)
    {
        $governorate      = Governorate::findOrFail($id);
        $events           = Event::status('Available')->where('governorate_id',$governorate->id)->paginate(12);
        return view('website.events.index',compact('events'));
    }

    public function city($id)
    {
        $city             = City::findOrFail($id);
        $events           = Event::status('Available')->where('city_id',$city->id)->paginate(12);
        return view('website.events.index',compact('events'));
    }

    public function show($id)
    {
        $event = Event::status('Available')->findOrFail($id);
        return view('website.events.show',compact('event'));
    }

    public function create()
    {
        $categories = Category::status(1)->get();
        $countries = Country::all();
        $governorates = Governorate::all();
        $cities = City::all();
        return view('website.events.create',compact('categories','countries','governorates','cities'));
    }

    public function store(EventRequest $request)
    {
        $events = new Event();
        $events->setTranslation('title', 'en', $request->title_en)
            ->setTranslation('title', 'ar', $request->title_ar)
            ->setTranslation('title', 'fr', $request->title_fr)
            ->setTranslation('description', 'en', $request->description_en)
            ->setTranslation('description', 'ar', $request->description_ar)
            ->setTranslation('description', 'fr', $request->description_fr)
            ->setTranslation('location', 'en', $request->location_en)
            ->setTranslation('location', 'ar', $request->location_ar)
            ->setTranslation('location', 'fr', $request->location_fr);
        $events->time               = $request->time;
        $events->date               = $request->date;
        $events->country_id         = $request->country_id;
        $events->governorate_id     = $request->governorate_id;
        $events->city_id            = $request->city_id;
        $events->category_id        = $request->category_id;
        $events->budget             = $request->budget;
        $events->user_id            = auth()->user()->id;
        $events->create_user_id     = auth()->user()->id;
        $events->status             = 'Stopped';
        if ($request->hasFile('images')) {
            $events
                ->addMediaFromRequest('images')
                ->UsingName($events->title_en)
                ->UsingFileName("$events->title_en")
                ->toMediaCollection('images');
        }
        $events->tags()->sync($request->event_id);
        $events->save();
        return redirect()->route('event.create')
            ->with(['message' => __('website/home.added_event_successfully')]);
    }

}

