<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(ColorTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(OrderDetailTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(PromotionTableSeeder::class);
        $this->call(ProductPromotionTableSeeder::class);
        $this->call(ImageTableSeeder::class);
    }
}
