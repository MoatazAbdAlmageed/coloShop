<?php

use Illuminate\Database\Seeder;

class product_typesTableSeeder extends Seeder
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

	    DB::table('types')->truncate();

	    $type = new \App\Type(
		    [
			    'id'          => null,
			    'title'       => 'Normal',
			    'description' => 'Normal description',


		    ]
	    );
	    $type->save();


	    $type = new \App\Type(
		    [
			    'id'          => null,
			    'title'       => 'Sale',
			    'description' => 'Sale description',


		    ]
	    );
	    $type->save();
    }
}
