<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function project() {
        $this->belongsTo(Project::class, 'project_id');
    }

    public function user() {
        $this->belongsTo(User::class, 'created_by');
    }

    public function taskStatus() {
        $this->belongsTo(TaskStatus::class, 'task_status_id');
    }
}
