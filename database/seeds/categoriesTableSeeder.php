<?php

use Illuminate\Database\Seeder;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


	    //php - Laravel: Reset auto increment before re-seeding a table - Stack Overflow
	    DB::statement('SET FOREIGN_KEY_CHECKS=0');

	    DB::table('categories')->truncate();

	    $category = new \App\Category(
		    [
			    'id'          => null,
			    'title'       => 'Cloths',
			    'description' => 'Cloths description',
			    'slug' => 'cloths',

		    ]
	    );
	    $category->save();


	    $category = new \App\Category(
		    [
			    'id'          => null,
			    'title'       => 'Mobiles',
			    'description' => 'Mobiles description',
			    'slug' => 'mobiles',

		    ]
	    );
	    $category->save();


	    $category = new \App\Category(
		    [
			    'id'          => null,
			    'title'       => 'Mouses',
			    'description' => 'Mouses description',
			    'slug' => 'mouses',

		    ]
	    );
	    $category->save();


	    $category = new \App\Category(
		    [
			    'id'          => null,
			    'title'       => 'Laptops',
			    'description' => 'Laptops description',
			    'slug' => 'laptops',

		    ]
	    );
	    $category->save();



    }
}
