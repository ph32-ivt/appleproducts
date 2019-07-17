<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Image;
use Faker\Generator as Faker;
use App\User;
use App\Product;

$factory->define(Image::class, function (Faker $faker) {
	$userId = User::pluck('id')->toArray();
	return [
		'name'=>$faker->name,
		'path' => '/images/'.$faker->numberBetween($min = 1, $max = 100).'.png',
		'imageable_type'=>'App\\'.$faker->randomElement($array = array ('User','Product')),
		'imageable_id'=>$userId[array_rand($userId)]
	];
});
