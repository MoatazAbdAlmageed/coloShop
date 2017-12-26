<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(productTableSeeder::class);
      $this->call(categoriesTableSeeder::class);
     $this->call(order_typesTableSeeder::class);
  $this->call(product_typesTableSeeder::class);

    }
}
