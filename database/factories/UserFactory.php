<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use App\UserRole;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => Str::ucfirst($faker->name),
        'username' => $faker->userName,
        'password' => $faker->password,
        'email' => $faker->unique()->safeEmail,
        'enabled' => 1,
        'profile_picture' => $faker->imageUrl($width = 200, $height = 200),
        'quote' => $faker->sentence(10, true),
        'emoji' => $faker->emoji,
        'website_url' => $faker->url,
        'role_id' => UserRole::all()->random()->id,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
