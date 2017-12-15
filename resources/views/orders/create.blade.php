@extends('main')
@section('content')
    <div class="container">
        <div class="row">
            {{--<form action="post">--}}
                {{--<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">--}}
                    {{--<input id="newsletter_email" type="email" placeholder="Your email" required="required"--}}
                           {{--data-error="Valid email is required.">--}}
                    {{--<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"--}}
                            {{--value="Submit">subscribe--}}
                    {{--</button>--}}
                {{--</div>--}}
            {{--</form>--}}








            {!! Form::open(['route'=>'products.store']) !!}

            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('Name:') !!}
                {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>

            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('Email:') !!}
                {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>

            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                {!! Form::label('Message:') !!}
                {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
                <span class="text-danger">{{ $errors->first('message') }}</span>
            </div>

            <div class="form-group">
                <button class="btn btn-success">Add Product</button>
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection