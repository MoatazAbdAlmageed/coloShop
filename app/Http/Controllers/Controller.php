<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Order;
use View;

class Controller extends BaseController {
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


	public function __construct() {
//dd(Order::find(1));
		$orders_count = Order::where('order_type_id',1)->get()->count();
//		dd($orders_count);
//Laravel 5 - global Blade view variable available in all templates - ExceptionsHub
		View::share( 'orders_count', $orders_count );
	}

}
