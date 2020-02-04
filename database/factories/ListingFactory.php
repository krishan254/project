<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Listing;
use App\Agent;
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

$factory->define(Listing::class, function (Faker $faker) {
    return [
        'agent_id' => factory(App\Agent::class)->create()->id,
        'title' => $faker->name,
    ];
});
