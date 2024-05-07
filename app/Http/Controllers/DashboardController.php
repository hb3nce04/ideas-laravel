<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Contracts\Database\Eloquent\Builder;

class DashboardController extends Controller
{
    public function index()
    {
        $ideas = Idea::when(request()->has('search'), function (Builder $query) {
            $query->search(request()->get('search'));
        })->orderBy('created_at', 'DESC')->paginate(5);
        return view('dashboard', compact('ideas'));
    }
}
