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
    return [
    	// 'user_type'=> $faker->sentence,
        'name' => $faker->name,
        'email' => $faker->unique()->randomElement([
        	'akello@gmail.com', 
        	'dorothynakasi@gmail.com',
        	'test@admin.com',
        	'dinnah@admin.com',
        	'opuda@lambo.com'
        ]),
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
