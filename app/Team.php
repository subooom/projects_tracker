<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function user() {
        $this->belongsTo(User::class, 'created_by');
    }

    public function users() {
        $this->hasMany(User::class, 'team_id');
    }
}
