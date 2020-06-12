<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserTeamRole;
use Faker\Generator as Faker;

$factory->define(UserTeamRole::class, function (Faker $faker) {
    return [
        'user_id' => \App\User::all()->random()->id,
        'team_id' => \App\Team::all()->random()->id,
        'team_role_id' => \App\TeamRole::all()->random()->id,
        'created_at'=> now(),
        'updated_at' => now(),
    ];
});
