<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Promotion;
use Faker\Generator as Faker;

$factory->define(Promotion::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence,
        'code'=>'Promotion'.rand(1,100),
        'description'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'start_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'end_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'unit'=>$faker->numberBetween($min = 0, $max = 70),
        'value'=>$faker->numberBetween($min = 0, $max = 3000000)
    ];
});
