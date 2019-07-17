<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use Faker\Generator as Faker;
use App\Product;
use App\User;

$factory->define(Comment::class, function (Faker $faker) {
	$productId = Product::pluck('id')->toArray();
	$userId = User::pluck('id')->toArray();
    return [
        'title'=>$faker->sentence,
        'description'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'rating'=>rand(3,5),
        'product_id'=>$productId[array_rand($productId)],
        'user_id'=>$userId[array_rand($userId)]
    ];
});
