<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use App\Type;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$categories = Category::all();


		$products = DB::table( 'products' )
		              ->leftjoin( 'orders', 'orders.product_id', '=', 'products.id' )
		              ->select( 'products.*' )
		              ->where( 'orders.product_id', null )
		              ->where( 'inStock', 1 )
		              ->get();


//		$products = Product::all();

		return view( 'products.index', compact( 'products', 'categories' ) );
	}


	public function manage() {
		$categories = Category::all();


		$products = DB::table( 'products' )
		              ->leftjoin( 'orders', 'orders.product_id', '=', 'products.id' )
		              ->select( 'products.*' )
//		              ->where( 'orders.product_id', null )
//		              ->where( 'inStock', 1 )
		              ->get();


	return view( 'products.manage', compact( 'products', 'categories' ) );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {



		return view( 'products.create' );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {

//validate
//		$validatedData = $request->validate( [
//			'title'       => 'required',
//			'description' => 'required',
//		] );

		if ( $request->InStock == null ) {
			$request->InStock = false;

		}
//		new
		$product              = new Product();
		$product->title       = $request->title;
		$product->description = $request->description;
		$product->price       = $request->price;
		$product->picture     = $request->picture;
		$product->color       = $request->color;
		$product->category_id = 1; //todo
		$product->type        = $request->type;
		$product->discount    = 0;
		$product->InStock     = $request->InStock;
		$product->save();
		$products = Product::all();

		return view( 'products.index', compact( 'products', 'categories' ) );
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
		$product    = Product::find( $id );

		return view( 'products.single', compact( 'product', 'categories' ) );
	}

	public function category( $slug ) {
		$categories = Category::all();
//dd($categories);
		/* get cat_id */
		$cat = Category::where( 'slug', $slug )->first();

		$products = Product::where( 'category_id', $cat->id )->get();

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


	/**
	 * Add product to cart
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function add_to_cart( $id ) {
		$order = Order::where( 'product_id', '=', $id )->first();

		if ( $order ) {
			$order->list = "Shopping";

		} else {
			$order             = new Order;
			$order->product_id = $id;
			$order->list       = "Shopping";
			$order->user_id    = 1; //default

		}
//dd($order);
		$order->save();

		return redirect()->route( 'products.index' );

	}

	/**
	 * Add product to cart
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function add_to_wish_list( $id ) {
		$order = Order::where( 'product_id', '=', $id )->first();
		if ( $order ) {
			$order->list = "Wish";

		} else {
			$order             = new Order();
			$order->product_id = $id;
			$order->list       = "Wish";
			$order->user_id    = 1;

		}

		$order->save();

		return redirect()->route( 'products.index' );
	}


	/**
	 * Remove product from cart
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function remove_product_from_cart( $id ) {

		Order::where( 'product_id', $id )
		     ->where( 'user_id', 1 )
		     ->delete();


		return redirect()->route( 'orders.index' );


	}


}
