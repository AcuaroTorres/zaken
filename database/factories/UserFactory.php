<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
    	'id'   		=> $faker->ean8,
    	'dv' 		=> $faker->randomDigitNotNull,
        'name' 		=> $faker->name,
        'email' 	=> $faker->unique()->safeEmail,
        'password' 	=> $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];

	/*
    $table->integer('id')->unique();
    $table->unsignedTinyInteger('dv');
    $table->string('name');
    $table->string('email')->unique();
    $table->string('password');
    */
});
