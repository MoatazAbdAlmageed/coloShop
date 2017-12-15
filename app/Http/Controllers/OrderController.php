<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$categories = Category::all();

		// get current user orders where it's type = cart (1)
		$orders = Order::where( 'user_id', 1 )
		               ->where( 'order_type_id', 1 )
		               ->get();

		$products = collect();

		// get all products
		foreach ( $orders as $order ) {
			$products_collection = $order->products()->get();
			$products->push( $products_collection );
		}

		$total_price = 0;
		foreach ( $products as $product ) {
			$product = $product[0];
			if ($product->type_id == 2) {
				$total_price +=  $product->price - ($product->price *($product->discount/100));
			}
			else    {

				$total_price +=$product->price;
			}

		}

		if ( count($products) ){
			return view( 'cart.index', compact( 'products','total_price', 'categories' ) );
		}
		else    {

			return redirect()->route( 'products.index' );
		}

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( $id ) {
		$categories = Category::all();
		$order      = Order::find( $id );
		$products   = $order->products;

		return view( 'products.index', compact( 'products', 'categories' ) );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( $id ) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id ) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		//
	}
}
