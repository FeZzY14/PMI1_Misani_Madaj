<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function authors()
    {
        return $this->belongsToMany(TeamMember::class, 'projects_team_member');
    }
}
