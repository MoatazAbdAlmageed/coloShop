@extends('main')
@section('content')
    <div class="container product_section_container" id="products_manage">
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



                <!-- Main Content -->

                <div class="main_content">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>inStock</th>
                            <th>Picture</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product )
                        <tr>
                            
                            <td>{{$product->title}}</td>
                            <td>${{$product->type}}</td>
                            <td>{{$product->price}}</td>
                            <td>

                            @if ($product->InStock == 1)
                                Yes
                                @else
                              <span class="badge badge-danger">  No</span>
                            @endif
                            </td>
                            <td>
                                <img src="{!! asset('images/products/'.$product->picture) !!}"
                                     alt="">

                            </td>
                            <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                 | <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </td>

                        </tr>

                            @endforeach
                        </tbody>
                    </table>
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