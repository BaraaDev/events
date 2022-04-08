<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::orderBy('created_at','asc')->paginate(25);
        return view('dashboard.tags.index',compact('tags'));
    }


    public function create()
    {
        return view('dashboard.tags.create');
    }


    public function store(TagRequest $request)
    {
        $tags = new Tag();
        $tags->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr);
        $tags->save();

        return redirect()->route('tags.index')->with(['message' => __('admin/home.success')]);
    }


    public function edit($id)
    {
        $model = Tag::findOrFail($id);
        return view('dashboard.tags.edit',compact('model'));
    }


    public function update(Request $request, $id)
    {
        $tags = Tag::findOrFail($id);
        $tags->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr);
        $tags->save();

        return redirect()->route('tags.index')->with(['message' => __('admin/home.update')]);
    }


    public function destroy($id)
    {
        $tags = Tag::findOrFail($id);
        $tags->delete();
        return redirect()->route('tags.index')
            ->with(['delete' => __('admin/home.del')]);
    }
}
