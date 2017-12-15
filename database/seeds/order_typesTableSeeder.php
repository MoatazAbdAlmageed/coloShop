<?php

use Illuminate\Database\Seeder;

class order_typesTableSeeder extends Seeder
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

	    DB::table('order_types')->truncate();

	    $type = new \App\Order_types(
		    [
			    'id'          => null,
			    'title'       => 'Cart',
			    'description' => 'Cart description',


		    ]
	    );
	    $type->save();


	    $type = new \App\Order_types(
		    [
			    'id'          => null,
			    'title'       => 'Wish',
			    'description' => 'Wish description',


		    ]
	    );
	    $type->save();
    }
}
