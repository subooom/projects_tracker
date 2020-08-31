<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $guarded = [];

    public function setRole($name) {
        $this->role_id = \App\UserRole::where('name', 'LIKE', $name)->first()->id;
    }

    public function role() {
        return $this->belongsTo(\App\UserRole::class, 'role_id', 'id');
    }

    public function expenses(){
        return $this->hasMany(\App\Expense::class, 'created_by', 'id');
    }

    public function my_teams() {
        return $this->hasMany(\App\Team::class, 'created_by', 'id');
    }

    // public function team() {
    //     return $this->belongsToMany(\App\Team::class, 'user_team_roles');
    // }

    public function projects() {
        return $this->hasMany(\App\Project::class, 'created_by', 'id');
    }

}
