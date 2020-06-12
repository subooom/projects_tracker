<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user() {
        $this->belongsTo(User::class, 'created_by');
    }

    public function projectType() {
        $this->belongsTo(ProjectType::class, 'project_type_id');
    }

    public function team() {
        $this->belongsTo(Team::class, 'team_id');
    }
}
