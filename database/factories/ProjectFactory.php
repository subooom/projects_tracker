<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title' => $title = Str::ucfirst($faker->unique()->word) . " " . Str::ucfirst($faker->unique()->word),
        'description' => $faker->text,
        'slug' => str_slug($title),
        'start_date' => now(),
        'end_date' => now()->addDays($faker->biasedNumberBetween(10, 30)),
        'budget' => $faker->biasedNumberBetween(10000, 300000),
        'budget_currency' => $faker->currencyCode,
        'project_type_id' => \App\ProjectType::all()->random()->id,
        'created_by' => \App\User::all()->random()->id,
        'team_id' => \App\Team::all()->random()->id,
        'status' =>'on-going',
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
