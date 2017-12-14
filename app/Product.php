<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public $table = 'products';

	public $fillable = [
		'title',
		'description',
		'price',
		'picture',
		'color',
		'InStock',
		'category_id',
		'type_id',
		'discount'
	]
	;
}
