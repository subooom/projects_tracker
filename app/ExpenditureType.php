<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenditureType extends Model
{

    protected $table = 'expenditure_type';

    public function user() {
        $this->belongsTo(User::class, 'created_by');
    }
}
