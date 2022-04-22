<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Models\Tag;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::orderBy('created_at','asc')->paginate(30);
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
        $tags->create_user_id = auth()->user()->id;
        $tags->save();

        return redirect()->route('tags.index')
            ->with(['message' => __('admin/home.added_successfully')]);
    }


    public function edit($id)
    {
        $model = Tag::findOrFail($id);
        return view('dashboard.tags.edit',compact('model'));
    }


    public function update(TagRequest $request, $id)
    {
        $tags = Tag::findOrFail($id);
        $tags->setTranslation('name', 'en', $request->name_en)
            ->setTranslation('name', 'ar', $request->name_ar)
            ->setTranslation('name', 'fr', $request->name_fr);
        $tags->update_user_id = auth()->user()->id;
        $tags->save();

        return redirect()->route('tags.index')
            ->with(['message' => __('admin/home.edited_successfully')]);
    }


    public function destroy($id)
    {
        $tags = Tag::findOrFail($id);
        $tags->delete();
        return redirect()->route('tags.index')
            ->with(['delete' => __('admin/home.deleted_successfully')]);
    }

    public function delete()
    {
        $tags = Tag::orderBy('created_at','asc')->onlyTrashed()->paginate(30);
        return view('dashboard.tags.delete',compact('tags'));
    }

    public function restore($id)
    {
        Tag::withTrashed()->find($id)->restore();
        return redirect()->route('tags.index')
            ->with(['message' => __('admin/home.restored_successfully')]);
    }

    public function forceDelete($id)
    {
        Tag::where('id', $id)->forceDelete();
        return redirect()->route('tags.index')
            ->with(['message' => __('admin/home.delete_forever_successfully')]);
    }
}
