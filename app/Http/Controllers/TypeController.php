<?php

namespace App\Http\Controllers;

use App\Product;
use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$product = Product::find( 2 );
		dd( $product->type );

		$items = Type::all();

		return view( 'types.index', compact( 'items' ) );


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view( 'types.create' );
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
		$validatedData = $request->validate( [
			'title'       => 'required',
			'description' => 'required',
		] );


//		new
		$type              = new Type();
		$type->title       = $request->title;
		$type->description = $request->description;

		$type->save();


		return back()->with( 'success', 'Product has been added' );

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( $id ) {
		//
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
