<?php

use Illuminate\Database\Seeder;
use App\Province;
use App\User;
use App\Order;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = User::pluck('id')->toArray();
        $orderId = Order::pluck('id')->toArray();
        Province::create([
            'name' => 'Hồ Chí Minh',
            'user_id'=>$userId[array_rand($userId)],
            'order_id'=>$orderId[array_rand($orderId)]
        ]);
        Province::create([
            'name' => 'Hải Phòng',
            'user_id'=>$userId[array_rand($userId)],
            'order_id'=>$orderId[array_rand($orderId)]
        ]);
        Province::create([
            'name' => 'Hà Nội',
            'user_id'=>$userId[array_rand($userId)],
            'order_id'=>$orderId[array_rand($orderId)]
        ]);
        Province::create([
            'name' => 'Đà Nẵng',
            'user_id'=>$userId[array_rand($userId)],
            'order_id'=>$orderId[array_rand($orderId)]
        ]);
        Province::create([
            'name' => 'Thừa Thiên Huế',
            'user_id'=>$userId[array_rand($userId)],
            'order_id'=>$orderId[array_rand($orderId)]
        ]);
        Province::create([
            'name' => 'Quảng Nam',
            'user_id'=>$userId[array_rand($userId)],
            'order_id'=>$orderId[array_rand($orderId)]
        ]);
    }
}
