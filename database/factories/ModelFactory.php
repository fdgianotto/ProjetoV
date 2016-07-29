<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'id' => 0,
        'email' => $faker->safeEmail,
        'password' => bcrypt('secret'),
        'name' => $faker->name,
        'sobrenome' => str_random(10),
        'admin' => 0,
        'foto_user' => 'user.jpg',
        'remember_token' => str_random(10),
    ];
});
