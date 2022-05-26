<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //

    public function index()
    {
        $services = Service::orderBy('created_at', 'asc')->paginate(30);
        return view('dashboard.services.index', compact('services'));
    }

    public function create()
    {
        return view('dashboard.services.create');
    }

    public function store(ServiceRequest $request)
    {
        $services = new Service();
        $services->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr)
            ->setTranslation('description', 'en', $request->description_en)
            ->setTranslation('description', 'ar', $request->description_ar)
            ->setTranslation('description', 'fr', $request->description_fr)
            ->setTranslation('price', 'en', $request->price_en)
            ->setTranslation('price', 'ar', $request->price_ar)
            ->setTranslation('price', 'fr', $request->price_fr)
            ->setTranslation('address', 'en', $request->address_en)
            ->setTranslation('address', 'ar', $request->address_ar)
            ->setTranslation('address', 'fr', $request->address_fr);
        $services->available_date = $request->available_date;
        $services->price          = $request->price;
        $services->category_id    = $request->category_id;
        $services->address        = $request->address;
        $services->status         = $request->status;
        $services->create_user_id = auth()->user()->id;
        $services->save();

        return redirect()->route('services.index')
            ->with(['message' => __('admin/home.added_successfully')]);
    }

    public function show()
    {
        return abort('404');
    }

    public function edit($id)
    {
        $model = Service::findOrFail($id);
        return view('dashboard.services.edit', compact('model'));
    }

    public function update(ServiceRequest $request, $id)
    {
        $services = Service::findOrFail($id);
        $services->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr)
            ->setTranslation('description', 'en', $request->description_en)
            ->setTranslation('description', 'ar', $request->description_ar)
            ->setTranslation('description', 'fr', $request->description_fr)
            ->setTranslation('price', 'en', $request->price_en)
            ->setTranslation('price', 'ar', $request->price_ar)
            ->setTranslation('price', 'fr', $request->price_fr)
            ->setTranslation('address', 'en', $request->address_en)
            ->setTranslation('address', 'ar', $request->address_ar)
            ->setTranslation('address', 'fr', $request->address_fr);

        $services->available_date = $request->available_date;
        $services->price          = $request->price;
        $services->address        = $request->address;
        $services->category_id    = $request->category_id;
        $services->status         = $request->status;
        $services->update_user_id = auth()->user()->id;
        $services->save();

        return redirect()->route('services.index')
            ->with(['message' => __('admin/home.edited_successfully')]);
    }

    public function destroy($id)
    {
        $services = Service::findOrFail($id);
        $services->delete();
        return redirect()->route('services.index')
            ->with(['message' => __('admin/home.deleted_successfully')]);
    }

    public function delete()
    {
        $services = Service::orderBy('created_at', 'asc')->onlyTrashed()->paginate(30);
        return view('dashboard.services.delete', compact('services'));
    }

    public function restore($id)
    {
        Service::withTrashed()->find($id)->restore();
        return redirect()->route('services.index')
            ->with(['message' => __('admin/home.restored_successfully')]);
    }

    public function forceDelete($id)
    {
        Service::where('id', $id)->forceDelete();
        return redirect()->route('services.index')
            ->with(['message' => __('admin/home.delete_forever_successfully')]);
    }
}
