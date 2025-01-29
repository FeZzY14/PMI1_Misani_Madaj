<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teaching extends Model
{
    public function authors()
    {
        return $this->belongsToMany(TeamMember::class, 'teachings_team_member');
    }
}
