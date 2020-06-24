<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenditureType extends Model
{

    protected $table = 'expenditure_type';

    public function user() {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function expenses() {
        return $this->hasMany(Expense::class, 'expenditure_type_id', 'id');
    }

    public function project() {
        return $this->belongsTo('App\Project', 'project_id', 'id');
    }
}
