<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    protected $table = 'project_type';

    public function projects() {
        return $this->hasMany(Project::class, 'project_type_id');
    }

    public function creator() {
        return $this->belongsTo(User::class, 'created_by');
    }
}
