<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function creator() {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function project_type() {
        return $this->belongsTo('App\ProjectType', 'project_type_id', 'id');
    }

    public function team() {
        return $this->belongsTo('App\Team', 'team_id', 'id');
    }

    public function expenses() {
        return $this->hasMany('App\Expense', 'project_id', 'id');
    }

    public function expenditure_types() {
        return $this->hasMany('App\ExpenditureType', 'project_id', 'id');
    }
}
