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

$faker = Faker\Factory::create();

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

//factory(App\Maker::class,5)->create();
$factory->define(App\Maker::class, function ($faker) {
    return [
            'name' => $faker->word(),
            'phone' => $faker->randomDigit(5)
    ];
});

//factory(App\Vehicle::class,30)->create();
$factory->define(App\Vehicle::class, function ($faker) {
    return [
            'color' => $faker->safeColorName(),
            'power' => $faker->randomNumber(),
            'capacity' => $faker->randomFloat(),
            'speed' => $faker->randomFloat(),
            'maker_id' => $faker->numberBetween(1,5)
    ];
});