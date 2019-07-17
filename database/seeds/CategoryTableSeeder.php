<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//main category
    	Category::create([
            'name'=>'Mac',
            'parent_id'=>null
        ]);
    	Category::create([
            'name'=>'iPad',
            'parent_id'=>null
        ]);
    	Category::create([
            'name'=>'iPhone',
            'parent_id'=>null
        ]);
    	Category::create([
            'name'=>'Watch',
            'parent_id'=>null
        ]);
    	Category::create([
            'name'=>'TV',
            'parent_id'=>null
        ]);
    	Category::create([
            'name'=>'Accessories',
            'parent_id'=>null
        ]);

    	//sub category for Mac
    	Category::create([
            'name'=>'iMac',
    		'parent_id'=>1
        ]);
    	Category::create([
            'name'=>'iMac Pro',
    		'parent_id'=>1
        ]);
    	Category::create([
            'name'=>'Macbook Air',
    		'parent_id'=>1
        ]);
    	Category::create([
            'name'=>'Macbook Pro',
    		'parent_id'=>1
        ]);
    	Category::create([
            'name'=>'Mac Mini',
    		'parent_id'=>1
        ]);

    	//subcategory for iPad
    	Category::create([
            'name'=>'iPad Pro',
    		'parent_id'=>2
        ]);
    	Category::create([
            'name'=>'iPad Air',
    		'parent_id'=>2
        ]);
    	Category::create([
            'name'=>'iPad',
    		'parent_id'=>2
        ]);
    	Category::create([
            'name'=>'iPad Mini',
    		'parent_id'=>2
        ]);

    	// sub category for iPhone
    	Category::create([
            'name'=>'iPhone XS',
    		'parent_id'=>3
        ]);
    	Category::create([
            'name'=>'iPhone XR',
    		'parent_id'=>3
        ]);
    	Category::create([
            'name'=>'iPhone 8',
    		'parent_id'=>3
        ]);
    	Category::create([
            'name'=>'iPhone 7',
    		'parent_id'=>3
        ]);
    	Category::create([
            'name'=>'iPhone 7',
    		'parent_id'=>3
        ]);
    	Category::create([
            'name'=>'iPhone 5',
    		'parent_id'=>3
        ]);

// subcategory for watch
    	Category::create([
            'name'=>'Watch Series 4',
    		'parent_id'=>4
        ]);
    	Category::create([
            'name'=>'Watch Series 3',
    		'parent_id'=>4
        ]);
    	Category::create([
            'name'=>'Watch Series 2',
    		'parent_id'=>4
        ]);

    	// subcategory for TV
    	Category::create([
            'name'=>'Apple TV 4k',
    		'parent_id'=>5
        ]);
    	Category::create([
            'name'=>'Apple TV HD',
            'parent_id'=>5
        ]);

    	// subcategory for Accessories
    	Category::create([
            'name'=>'Air Pod',
    		'parent_id'=>6
        ]);
    	Category::create([
            'name'=>'Apple Pecial',
    		'parent_id'=>6
        ]);
    	Category::create([
            'name'=>'Magic Mose',
    		'parent_id'=>6
        ]);
    	Category::create([
            'name'=>'Track Pad',
    		'parent_id'=>6
        ]);
    	Category::create([
            'name'=>'Magic KeBoard',
    		'parent_id'=>6
        ]);
    	Category::create([
            'name'=>'ChargingDock',
    		'parent_id'=>6
        ]);
    	Category::create([
            'name'=>'Adapter',
    		'parent_id'=>6
        ]);
    	Category::create([
            'name'=>'Cable',
            'parent_id'=>6
        ]);
    }
}
