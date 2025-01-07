<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Publication extends Model
{
    public function authors()
    {
        return $this->belongsToMany(TeamMember::class, 'publication_team_member');
    }
}
