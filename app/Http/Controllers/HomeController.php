<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $no_of_customers = User::where('user_type','=','customer')->count();
        $no_of_suppliers = User::where('user_type','=','supplier')->count();

        return view('home',compact('no_of_customers','no_of_suppliers'));
    }

    public function about()
    {
        return view('website.about');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function allCategories()
    {
        $categories = Category::get();
        return view('website.categories.index', compact('categories'));
    }
}
