<?php

namespace App\Providers;

use App\Models\Idea;
use App\Models\User;
use App\Policies\IdeaPolicy;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\App;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        Gate::define('admin', function (User $user) : bool {
            return (bool) auth()->user()->is_admin;
        });
        Gate::policy(Idea::class, IdeaPolicy::class);
        Gate::policy(User::class, UserPolicy::class);
        View::share('topUsers', User::withCount('ideas')
        ->orderBy('ideas_count','DESC')
        ->limit(5)->get());
    }
}
