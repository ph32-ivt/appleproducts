<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'address'=>$faker->address,
        'phone'=>'09'.$faker->ean8,
        'street'=>$faker->streetName,
    ];
});
