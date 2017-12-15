@extends('main')
@section('content')
    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's</a>
                        </li>
                    </ul>
                </div>

                <!-- Sidebar -->

                <div class="sidebar">
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Product Category</h5>
                        </div>
                        <ul class="sidebar_categories">

                            @foreach($categories as $category)
                            <li><a href={!! url('/categories/'.$category->id); !!}>{{$category->title}}</a></li>
                            @endforeach
                            {{--<li class="active"><a href={!! url('/'); !!}><span><i class="fa fa-angle-double-right"--}}
                                                                    {{--aria-hidden="true"></i></span>Women</a></li>--}}

                        </ul>
                    </div>

                    {{--<!-- Price Range Filtering -->--}}
                    {{--<div class="sidebar_section">--}}
                        {{--<div class="sidebar_title">--}}
                            {{--<h5>Filter by Price</h5>--}}
                        {{--</div>--}}
                        {{--<p>--}}
                            {{--<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">--}}
                        {{--</p>--}}
                        {{--<div id="slider-range"></div>--}}
                        {{--<div class="filter_button"><span>filter</span></div>--}}
                    {{--</div>--}}

                    {{--<!-- Sizes -->--}}
                    {{--<div class="sidebar_section">--}}
                        {{--<div class="sidebar_title">--}}
                            {{--<h5>Sizes</h5>--}}
                        {{--</div>--}}
                        {{--<ul class="checkboxes">--}}
                            {{--<li><i class="fa fa-square-o" aria-hidden="true"></i><span>S</span></li>--}}
                            {{--<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>M</span></li>--}}
                            {{--<li><i class="fa fa-square-o" aria-hidden="true"></i><span>L</span></li>--}}
                            {{--<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XL</span></li>--}}
                            {{--<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XXL</span></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                    {{--<!-- Color -->--}}
                    {{--<div class="sidebar_section">--}}
                        {{--<div class="sidebar_title">--}}
                            {{--<h5>Color</h5>--}}
                        {{--</div>--}}
                        {{--<ul class="checkboxes">--}}
                            {{--<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Black</span></li>--}}
                            {{--<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>Pink</span></li>--}}
                            {{--<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>--}}
                            {{--<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>--}}
                            {{--<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>--}}
                            {{--<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>--}}
                            {{--<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>--}}
                            {{--<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>--}}
                            {{--<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>--}}
                            {{--<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>--}}
                            {{--<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>--}}
                        {{--</ul>--}}
                        {{--<div class="show_more">--}}
                            {{--<span><span>+</span>Show More</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                </div>

                <!-- Main Content -->

                <div class="main_content">

                    <!-- Products -->

                    <div class="products_iso">
                        <div class="row">
                            <div class="col">

                                <!-- Product Sorting -->

                                <div class="product_sorting_container product_sorting_container_top">
                                    <ul class="product_sorting">
                                        <li>
                                            <span class="type_sorting_text">Default Sorting</span>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="sorting_type">
                                                <li class="type_sorting_btn"
                                                    data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span>
                                                </li>
                                                <li class="type_sorting_btn"
                                                    data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                                <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>
                                                    <span>Product Name</span></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span>Show</span>
                                            <span class="num_sorting_text">6</span>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="sorting_num">
                                                <li class="num_sorting_btn"><span>6</span></li>
                                                <li class="num_sorting_btn"><span>12</span></li>
                                                <li class="num_sorting_btn"><span>24</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="pages d-flex flex-row align-items-center">
                                        <div class="page_current">
                                            <span>1</span>
                                            <ul class="page_selection">
                                                <li><a href={!! url('/'); !!}>1</a></li>
                                                <li><a href={!! url('/'); !!}>2</a></li>
                                                <li><a href={!! url('/'); !!}>3</a></li>
                                            </ul>
                                        </div>
                                        <div class="page_total"><span>of</span> 3</div>
                                        <div id="next_page" class="page_next"><a href={!! url('/'); !!}><i
                                                        class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                                    </div>

                                </div>

                                <!-- Product Grid -->

                                <div class="product-grid">

                                    @foreach($products as $product)

                                        <div class="product-item men">
                                            <div class="product discount product_filter">
                                                <div class="product_image">
                                                    <a href={!! url('/products/'.$product->id); !!}>
                                                    <img src="{!! asset('images/products/'.$product->picture) !!}" alt="">
                                                    </a>
                                                </div>
                                                <div class="favorite favorite_left"></div>
                                                @if ($product->type_id == 2)
                                                <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                                    <span>-${{$product->price *($product->discount/100)}}</span></div>
                                                @endif
                                                <div class="product_info">
                                                    <h6 class="product_name"><a href={!! url('/products/'.$product->id); !!}>{{$product->title}}</a></h6>
                                                    @if ($product->type_id == 2)
@php
    $price = $product->price - ($product->price *($product->discount/100));
@endphp

                                                        <div class="product_price">{{ $price  }}<span>{{$product->price}}</span></div>

                                                        @else
                                                        <div class="product_price">{{ $product->price  }}</div>

                                                    @endif

                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href={!! url('/'); !!}>add to cart</a></div>
                                        </div>
                                    @endforeach

                                </div>

                                <!-- Product Sorting -->

                                {{--<div class="product_sorting_container product_sorting_container_bottom clearfix">--}}
                                    {{--<ul class="product_sorting">--}}
                                        {{--<li>--}}
                                            {{--<span>Show:</span>--}}
                                            {{--<span class="num_sorting_text">04</span>--}}
                                            {{--<i class="fa fa-angle-down"></i>--}}
                                            {{--<ul class="sorting_num">--}}
                                                {{--<li class="num_sorting_btn"><span>01</span></li>--}}
                                                {{--<li class="num_sorting_btn"><span>02</span></li>--}}
                                                {{--<li class="num_sorting_btn"><span>03</span></li>--}}
                                                {{--<li class="num_sorting_btn"><span>04</span></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                    {{--<span class="showing_results">Showing 1–3 of 12 results</span>--}}
                                    {{--<div class="pages d-flex flex-row align-items-center">--}}
                                        {{--<div class="page_current">--}}
                                            {{--<span>1</span>--}}
                                            {{--<ul class="page_selection">--}}
                                                {{--<li><a href={!! url('/'); !!}>1</a></li>--}}
                                                {{--<li><a href={!! url('/'); !!}>2</a></li>--}}
                                                {{--<li><a href={!! url('/'); !!}>3</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div class="page_total"><span>of</span> 3</div>--}}
                                        {{--<div id="next_page_1" class="page_next"><a href={!! url('/'); !!}><i--}}
                                                        {{--class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>--}}
                                    {{--</div>--}}

                                {{--</div>--}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Benefit -->
    <div class="benefit">
        <div class="container">
            <div class="row benefit_row">
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>free shipping</h6>
                            <p>Suffered Alteration in Some Form</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>cach on delivery</h6>
                            <p>The Internet Tend To Repeat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>45 days return</h6>
                            <p>Making it Look Like Readable</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>opening all week</h6>
                            <p>8AM - 09PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection