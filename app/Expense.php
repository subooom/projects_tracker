<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function project(){
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    public function expenditure_type(){
        return $this->belongsTo(ExpenditureType::class, 'expenditure_type_id','id');
    }

    public function creator(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
