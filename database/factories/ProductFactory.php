<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;
use App\Category;
use App\User;

$factory->define(Product::class, function (Faker $faker) {
	$userId  = User::pluck('id')->toArray();
	$categoryId = Category::pluck('id')->toArray();
	return [
		'name'=>'Apple Product '.$faker->unique()->numberBetween(1,300),
		'price'=>$faker->numberBetween($min=2000000,$max=50000000),
		'active'=>1,
		'description'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
		'product_available'=>1,
		'note'=>$faker->sentence($nbWords = 10, $variableNbWords = true),
		'category_id'=>$categoryId[array_rand($categoryId)],
		'user_id'=>$userId[array_rand($userId)],
	];
});
