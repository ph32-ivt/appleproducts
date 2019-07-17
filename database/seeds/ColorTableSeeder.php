<?php

use Illuminate\Database\Seeder;
use App\Color;
use App\Product;


class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$productId = Product::pluck('id')->toArray();
    	Color::create([
    		'name'=>'Black',
    		'product_id'=>$productId[array_rand($productId)],
    	]);
    	Color::create([
    		'name'=>'Yellow',
    		'product_id'=>$productId[array_rand($productId)],
    	]);
    	Color::create([
    		'name'=>'Grey',
    		'product_id'=>$productId[array_rand($productId)],
    	]);
    	Color::create([
    		'name'=>'Red',
    		'product_id'=>$productId[array_rand($productId)],
    	]);
    	Color::create([
    		'name'=>'Pink',
    		'product_id'=>$productId[array_rand($productId)],
    	]);
    	Color::create([
    		'name'=>'White',
    		'product_id'=>$productId[array_rand($productId)],
    	]);
    	Color::create([
    		'name'=>'Light Blue',
    		'product_id'=>$productId[array_rand($productId)],
    	]);
    }
}
