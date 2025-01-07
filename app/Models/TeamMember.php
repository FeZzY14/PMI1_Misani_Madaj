<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class TeamMember extends Model
{
    public function publications()
    {
        return $this->belongsToMany(Publication::class, 'publication_team_member');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'projects_team_member');
    }
}
