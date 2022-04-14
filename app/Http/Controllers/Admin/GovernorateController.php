<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GovernorateRequest;
use App\Models\Governorate;

class GovernorateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $governorates = Governorate::orderBy('created_at','asc')->paginate(30);
        return view('dashboard.governorates.index',compact('governorates'));
    }

    
    public function create()
    {
        return view('dashboard.governorates.create');
    }

  
    public function store(GovernorateRequest $request)
    {
        $governorates = new Governorate();
        $governorates->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr);
        $governorates->save();

        return redirect()->route('governorates.index')
            ->with(['message' => __('admin/home.added_successfully')]);
    }


   
    public function edit($id)
    {
        $model = Governorate::findOrFail($id);
        return view('dashboard.governorates.edit',compact('model'));
    }


    public function update(GovernorateRequest $request, $id)
    {
        $governorates = Governorate::findOrFail($id);
        $governorates->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr);
        $governorates->save();

        return redirect()->route('governorates.index')
            ->with(['message' => __('admin/home.edited_successfully')]);
    }


    public function destroy($id)
    {
        $governorates = Governorate::findOrFail($id);

        $governorates->delete();

        return redirect()->route('governorates.index')
            ->with(['delete' => __('admin/home.deleted_successfully')]);
    }
}
