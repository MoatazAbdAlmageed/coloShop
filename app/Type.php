<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	public function product()
	{
		return $this->hasMany('App\Products');
	}
}
