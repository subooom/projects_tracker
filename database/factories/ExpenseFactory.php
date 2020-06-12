<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Expense;
use Faker\Generator as Faker;

$factory->define(Expense::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
        'description' => $faker->text,
        'amount' => $faker->randomNumber(3),
        'project_id' => \App\Project::all()->random()->id,
        'expenditure_type_id' => \App\ExpenditureType::all()->random()->id,
        'created_by' => \App\User::all()->random()->id,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
