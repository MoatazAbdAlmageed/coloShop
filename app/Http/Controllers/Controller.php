<?php

namespace App\Http\Controllers;

use App\Order;
use App\Category;
use App\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use View;

class Controller extends BaseController {
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


	public function __construct() {

		$orders_count = Order::where( 'list', 'Shopping' )->get()->count();
		$categories = Category::all();
		$products = Product::all();


//Laravel 5 - global Blade view variable available in all templates - ExceptionsHub
		View::share( 'orders_count', $orders_count );
		View::share( 'categories', $categories );
		View::share( 'products', $products );
	}

}
