<?php

namespace App\Http\Controllers;

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


}

