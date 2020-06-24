<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserRolePermission;
use Faker\Generator as Faker;

$factory->define(UserRolePermission::class, function (Faker $faker) {
    return [
        'user_role_id' => \App\UserRole::all()->random()->id,
        'permission_id' => \App\Permission::all()->random()->id,
        'created_at'=> now(),
        'updated_at' => now(),
    ];
});
