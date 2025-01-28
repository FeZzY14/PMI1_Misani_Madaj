<?php

namespace App\Providers;

use App\Models\Project;
use App\Models\Publication;
use App\Models\Teaching;
use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();
        View::composer(
            ['home', 'people'],
            function ($view) {
                $team_members = TeamMember::orderBy('order')->get();
                $publications = Publication::all();
                $projects = Project::all();
                $teachings = Teaching::all();

                $view->with('team_members', $team_members)
                    ->with('publications', $publications)
                    ->with('projects', $projects)
                    ->with('teachings', $teachings);
            }
        );
    }
}
