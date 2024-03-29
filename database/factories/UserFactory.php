<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Role;
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
	$roleId 	= Role::pluck('id')->toArray();
	return [
		'username' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'password'=>bcrypt('admin1'),
		'firstname'=>$faker->firstName,
		'lastname'=>$faker->lastName,
		'phone'=>'09'.$faker->ean8,
		'address'=>$faker->address,
		'gender'=>$faker->randomElement(['male','female']),
		'street'=>$faker->streetName,
		'date_of_birth'=>$faker->date($format = 'Y-m-d', $max = 'now'),
		'role_id'=>$roleId[array_rand($roleId)],
		'remember_token' => Str::random(10),
	];
});
