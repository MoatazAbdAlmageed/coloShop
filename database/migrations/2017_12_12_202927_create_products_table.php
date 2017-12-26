<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('title');
	        $table->text('description');
	        $table->float('price');
	        $table->string('picture');
	        $table->string('color');
	        $table->boolean('InStock')->default(true);
			// Relation
	        $table->integer('category_id')->nullable();;
//	        $table->integer('type_id');
	        $table->enum('type', ['Normal', 'Sale']);

	        //timestamps
	        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
