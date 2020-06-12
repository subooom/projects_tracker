<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTeamRole extends Model
{
    protected $table = "user_team_roles";

    public function user() {
        $this->hasOne(User::class, 'user_id');
    }

    public function team_role() {
        $this->hasOne(TeamRole::class, 'team_role_id');
    }
    //
}
