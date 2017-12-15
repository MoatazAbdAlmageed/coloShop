<?php

use Illuminate\Database\Seeder;
//use DB;
class productTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {


		//php - Laravel: Reset auto increment before re-seeding a table - Stack Overflow
		DB::statement('SET FOREIGN_KEY_CHECKS=0');

		DB::table('products')->truncate();


		$product = new \App\Product(
			[
				'id'          => null,
				'title'       => 'Microsoft mouse',
				'description' => 'Microsoft mouse description ',
				'price'       => 200,
				'picture'     => '6883caab-890a-46d8-b377-8677ce256307.jpg',
				'color'       => '',
				'InStock'     => 1,
				'category_id' => 3,
				'type_id'     => 1,
				'discount'    => 0,
			]
		);
		$product->save();


		$product = new \App\Product(
			[
				'id'          => null,
				'title'       => 'HP EliteBook 8570p',
				'description' => 'Mobile high-end. One thing is for sure: the HP EliteBook 8570p is no run-of-the-mill system designed for the masses. Rather, the system tries to appeal to the professional user and touts features such as a premium chassis, great display, long warranty, and powerful processing capabilities. We will determine how well this notebook meets the requirements of its intended target audience in our review.

',
				'price'       => 10000,
				'picture'     => 'c03460755.png',
				'color'       => '',
				'InStock'     => 1,
				'category_id' => 4,
				'type_id'     => 1,
				'discount'    => 10,
			]
		);
		$product->save();




		$product = new \App\Product(
			[
				'id'          => null,
				'title'       => 'Apple iPhone 7 Plus - 128GB - Red
',
				'description' => '5.5" IPS LCD Capacitive Touch Screen 128 GB Internal Storage Dual 12 MP Back Camera, 7 MP Front Camera Quad-core 2.23 GHz CPU, 3 GB RAM OS: iOS 10 Li-Po 2900 mAh Battery.

',
				'price'       => 17000,
				'picture'     => 'HKHC2.jpeg',
				'color'       => '',
				'InStock'     => 1,
				'category_id' => 2,
				'type_id'     => 2,
				'discount'    => 10,
			]
		);
		$product->save();



		$product = new \App\Product(
			[
				'id'          => null,
				'title'       => 'Jacket',
				'description' =>  'Zaful  Fashionable Basic Jacket ',
				'price'       => 500,
				'picture'     => 'single_3_thumb.jpg',
				'color'       => '',
				'InStock'     => 1,
				'category_id' => 1,
				'type_id'     => 2,
				'discount'    => 10,
			]
		);
		$product->save();


	}
}
