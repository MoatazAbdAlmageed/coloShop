<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_types extends Model
{


	protected $table = 'order_types';


	public $fillable = [
		'title',
		'description',
	]
	;

}
