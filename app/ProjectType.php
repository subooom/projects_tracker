<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    protected $table = 'project_type';

    public function projects() {
        $this->hasMany(Project::class, 'project_type_id');
    }

    public function user() {
        $this->belongsTo(User::class, 'created_by');
    }
}
