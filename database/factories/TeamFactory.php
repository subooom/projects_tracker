<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => Str::ucfirst($faker->company),
        'description' => $faker->text,
        'created_by' => \App\User::all()->random()->id,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
