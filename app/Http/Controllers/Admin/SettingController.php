<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setting()
    {
        return view('dashboard.setting');
    }

    public function store(Request $request)
    {
        $settings = Setting::first();
        $settings->update($request->all());

        return redirect()->route('setting');
    }
}
