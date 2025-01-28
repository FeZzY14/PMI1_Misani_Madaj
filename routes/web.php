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
    $projects = Project::all();
    return view('projects', compact("projects"));
});

Route::get('/publications', function () {
    $publications = Publication::all();
    return view('publications', compact("publications"));
});

Route::get('/teamMember/{id}', function ($id) {
    $team_member = App\Models\TeamMember::with(['publications' => function ($query) {
        $query->orderByRaw('YEAR(publications.publication_date) DESC');
    }])->findOrFail($id);

    $groupedPublications = $team_member->publications->groupBy(function ($publication) {
        return \Carbon\Carbon::parse($publication->publication_date)->format('Y'); // Group by year
    });
    return view('teamMember', compact('team_member', 'groupedPublications'));
});

Route::get('/projectDetails/{id}', function ($id) {
    $project = Project::query()->findOrFail($id);
    return view('projectDetails', compact("project"));
});
