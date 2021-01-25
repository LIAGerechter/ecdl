<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories = CATEGORIES;

    	foreach($categories as $category) {
	        DB::table('categories')->insert([
	            'name' => $category
	        ]);    
    	}
    }
}
