<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	public $fillable = [
	'user_id',
	'product_id',
	'order_type_id',
	]
	;


	public function products()
	{
		return $this->belongsToMany('App\Product', 'orders','id');
	}
}
