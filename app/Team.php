<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    // public function users() {
    //     return $this->hasMany(User::class, 'user_team_roles');
    // }
}
