<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'created_by' => \App\User::all()->random()->id,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
