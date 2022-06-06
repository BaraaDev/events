<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::orderBy('created_at','asc')->paginate(30);
        return view('dashboard.users.index',compact('users'));
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    // public function count_users()
    // {
    //     $no_of_customers = User::where('user_type','=','customer')->count();
    //     $no_of_suppliers = User::where('user_type','=','supplier')->count();

    //     return view('home',compact('no_of_customers','no_of_suppliers'));
    // }

}
