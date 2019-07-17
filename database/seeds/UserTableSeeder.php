<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'username' => 'lephap',
    		'email' => 'admin@localhost',
    		'password'=>bcrypt('admin'),
    		'firstname'=>'le',
    		'lastname'=>'phap',
    		'phone'=>'0913333163',
    		'address'=>'Da Nang',
    		'gender'=>'male',
    		'street'=>'36 An Nhon 7',
    		'date_of_birth'=>'1991-1-1',
    		'role_id'=>1,
    		'remember_token' => Str::random(10),
    	]);
    	factory(App\User::class,15)->create();
    }
}
