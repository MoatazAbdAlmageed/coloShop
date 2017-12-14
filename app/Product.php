<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	public function category()
	{
		return $this->belongsTo('App\Category');
	}


	public function type()
	{
		return $this->belongsTo('App\Type');
	}

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
