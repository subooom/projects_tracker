<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'work' => $faker->sentence(),
        'slug' => $faker->slug,
        'hours_needed' => $faker->biasedNumberBetween(1, 6),
        'task_status_id' => \App\TaskStatus::all()->random()->id,
        'project_id' => \App\Project::all()->random()->id,
        'created_by' => \App\User::all()->random()->id,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
