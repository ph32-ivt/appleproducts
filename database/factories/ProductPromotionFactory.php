<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ProductPromotion;
use Faker\Generator as Faker;
use App\Product;
use App\Promotion;

$factory->define(ProductPromotion::class, function (Faker $faker) {
		$productId = Product::pluck('id')->toArray();
		$promotionId = Promotion::pluck('id')->toArray();
		return [
			'product_id'=>$productId[array_rand($productId)],
			'promotion_id'=>$promotionId[array_rand($promotionId)]
		];
	});