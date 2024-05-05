<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAndCreateIdeaRequest;
use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class IdeaController extends Controller
{
    public function show(Idea $idea)
    {
        return view('ideas.show', compact('idea'));
    }

    public function store(UpdateAndCreateIdeaRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->id();
        Idea::create($validated);
        return redirect()->route('dashboard')->with('success', 'Idea created successfully!');
    }

    public function destroy(Idea $idea)
    {
        Gate::authorize('delete', $idea);
        $idea->delete();
        return redirect()->route('dashboard')->with('success', 'Idea deleted successfully!');
    }

    public function edit(Idea $idea)
    {
        Gate::authorize('update', $idea);
        $editing = true;
        return view('ideas.show', compact('idea', 'editing'));
    }

    public function update(UpdateAndCreateIdeaRequest $request, Idea $idea)
    {
        $validated = $request->validated();
        Gate::authorize('update', $idea);
        $idea->update($validated);
        return redirect()->route('ideas.show', $idea->id)->with('success', 'Idea updated successfully!');
    }
}
