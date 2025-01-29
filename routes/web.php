<?php

use App\Models\Data;
use App\Models\Project;
use App\Models\Publication;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/data', function () {
    $data = Data::all();
    return view('data', compact("data"));
});

Route::get('/people', [\App\Http\Controllers\TeamMemberController::class, "index"]);

Route::get('/projects', function () {
    $projects = Project::orderBy('order')->paginate(10);
    return view('projects', compact("projects"));
});

Route::get('/publications', function () {
    $publications = Publication::orderBy('order')->paginate(20);
    return view('publications', compact("publications"));
});

Route::get('/teamMember/{id}', function ($id) {
    $team_member = App\Models\TeamMember::with([
        'publications' => function ($query) {
            $query->orderByRaw('YEAR(publications.publication_date) DESC');
        },
        'projects' => function ($query) {
            $query->orderByRaw('YEAR(projects.project_date) DESC');
        },
        'teachings'
    ])->findOrFail($id);

    $groupedPublications = $team_member->publications->groupBy(function ($publication) {
        return \Carbon\Carbon::parse($publication->publication_date)->format('Y'); // Group by year
    });

    $groupedProjects = $team_member->projects->groupBy(function ($projects) {
        return \Carbon\Carbon::parse($projects->project_date)->format('Y'); // Group by year
    });


    return view('teamMember', compact('team_member', 'groupedPublications', 'groupedProjects'));
});

Route::get('/projectDetails/{id}', function ($id) {
    $project = Project::query()->findOrFail($id);
    return view('projectDetails', compact("project"));
});
