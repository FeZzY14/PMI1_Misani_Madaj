<?php

use App\Models\Publication;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/people', [\App\Http\Controllers\TeamMemberController::class, "index"]);

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/publications', function () {
    $publications = Publication::all();
    return view('publications', compact("publications"));
});

Route::get('/teamMember/{id}', function ($id) {
    $team_member = App\Models\TeamMember::with(['publications' => function ($query) {
        // Sort the publications by year (descending or ascending)
        $query->orderByRaw('YEAR(publications.publication_date) DESC');
    }])->findOrFail($id);

    $groupedPublications = $team_member->publications->groupBy(function ($publication) {
        return \Carbon\Carbon::parse($publication->publication_date)->format('Y'); // Group by year
    });
    return view('teamMember', compact('team_member', 'groupedPublications'));
});

Route::get('/projectDetails', function () {
    return view('projectDetails');
});
