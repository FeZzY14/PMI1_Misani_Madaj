<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        $team_members = TeamMember::orderBy('order')->get();
        return view('people', compact('team_members'));
    }
}
