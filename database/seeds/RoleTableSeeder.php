<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
        	'name'=>'Admin',
        	'authority'=>'Manager All Websites'
        ]);
        Role::create([
        	'name'=>'Editor',
        	'authority'=>'Approve Product, manager member'
        ]);
        Role::create([
        	'name'=>'Member',
        	'authority'=>'Sell and buy product Product'
        ]);
    }
}
