<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


namespace cb\shadmin\Setup;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(SetupModel::class, function (Faker $faker) {
    return [
        'system_name' => $faker->name,
        'system_title' => $faker->name,
        'system_email' => $faker->unique()->safeEmail,
        'system_address' => $faker->state,
    ];
});
