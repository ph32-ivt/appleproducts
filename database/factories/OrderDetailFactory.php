<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\OrderDetail;
use Faker\Generator as Faker;
use App\Product;
use App\Order;

$factory->define(OrderDetail::class, function (Faker $faker) {
	$productId  = Product::pluck('id')->toArray();
	$orderId = Order::pluck('id')->toArray();
    return [
        'quantity'=>rand(0,10),
        'total'=>rand(1000000,2000000),
        'product_id'=>$productId[array_rand($productId)],
        'order_id'=>$orderId[array_rand($orderId)],
    ];
});
