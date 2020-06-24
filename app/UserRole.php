<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'user_roles';

    public function users() {
        return $this->hasMany(\App\User::class, 'role_id', 'id');
    }

    public function permissions() {
        return $this->belongsToMany(Permission::class, 'user_role_permission');
    }
}
