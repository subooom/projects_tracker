<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTeamRole extends Model
{
    protected $table = "user_team_roles";

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function team_role() {
        return $this->belongsTo(TeamRole::class, 'team_role_id', );
    }
}
