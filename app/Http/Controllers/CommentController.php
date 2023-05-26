<?php

namespace App\Http\Controllers;

use App\Models\Post;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        request()->validate([
            'body' => 'required',
        ]);

        $post->comments()->create([
            'body' => request('body'),
            'user_id' => request()->user()->id,
        ]);

        back()->with('success', "You've added to the conversation!");
    }
}
