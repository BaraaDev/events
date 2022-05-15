<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Event;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->body  = $request->get('comment_body');
        $comment->value = $request->get('value');
        $comment->user()->associate($request->user());
        $event          = Event::find($request->get('event_id'));
        $event->comments()->save($comment);

        return  redirect()->route('event.show',['id' => $event->id, "#comments$comment->id"])
            ->with(['message' => __('website/home.added_successfully')]);
    }

    public function CommentDelete($id)
    {
        Comment::where('id', $id)->delete();
        return redirect()->back()
            ->with(['message' => __('website/home.deleted_successfully')]);
    }
}
