<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function project(){
        $this->belongsTo(Project::class, 'project_id');
    }

    public function expenditureType(){
        $this->belongsTo(ExpenditureType::class, 'expenditure_type_id');
    }

    public function user(){
        $this->belongsTo(User::class, 'created_at');
    }
}
