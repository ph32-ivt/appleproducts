<?php

use Illuminate\Database\Seeder;
use App\ProductPromotion;

class ProductPromotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProductPromotion::class,20)->create();
    }
}
