<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Idea $idea) {

        $validated = request()->validate([
            'content' => 'required|min:3|max:240'
        ]);

        $validated['user_id'] = auth()->id();
        $validated['idea_id'] = $idea->id;

        Comment::create($validated);

        return redirect()->route('ideas.show', $idea->id)->with('success','Comment posted successfully!');
    }
}
