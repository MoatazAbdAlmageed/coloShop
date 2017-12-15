<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


	public $fillable = [
		'title',
		'description',
		'slug',

	]
	;


	public function products()
	{
		return $this->hasMany('App\Product');

	}
}
