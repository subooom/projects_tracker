<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProjectType;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(ProjectType::class, function (Faker $faker) {
    return [

        'name' => $name = Str::ucfirst($faker->unique()->word),
        'description' => $faker->sentence(),
        'slug' => str_slug($name),
        'created_by' => \App\Team::all()->random()->id,
        'created_at'=> now(),
        'updated_at' => now(),
        'attributes' => $faker->sentence,
    ];
});
