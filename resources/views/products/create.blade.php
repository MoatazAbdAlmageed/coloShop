@extends('main')
@section('content')
    <div class="container">
        <div class="row">
            {!! Form::open(['route'=>'products.store']) !!}

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                {!! Form::label('Title:') !!}
                {!! Form::text('title', old('title'), ['class'=>'form-control', 'placeholder'=>'Enter title']) !!}
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>




            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                {!! Form::label('description:') !!}
                {!! Form::textarea('description', old('description'), ['class'=>'form-control', 'placeholder'=>'Enter description']) !!}
                <span class="text-danger">{{ $errors->first('description') }}</span>
            </div>




            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                {!! Form::label('price:') !!}
                {!! Form::text('price', old('price'), ['class'=>'form-control', 'placeholder'=>'Enter price']) !!}
                <span class="text-danger">{{ $errors->first('price') }}</span>
            </div>



            <div class="form-group {{ $errors->has('color') ? 'has-error' : '' }}">
                {!! Form::label('color:') !!}
                {!! Form::text('color', old('color'), ['class'=>'form-control', 'placeholder'=>'Enter color']) !!}
                <span class="text-danger">{{ $errors->first('color') }}</span>
            </div>
            

            <div class="form-group {{ $errors->has('picture') ? 'has-error' : '' }}">
                {!! Form::label('picture:') !!}
                {!! Form::text('picture', old('picture'), ['class'=>'form-control', 'placeholder'=>'Enter picture']) !!}
                <span class="text-danger">{{ $errors->first('picture') }}</span>
            </div>




            <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                {!! Form::label('Product Type:') !!}
                {{ Form::select('type_id', ['1', '2', '3']) }}
                <span class="text-danger">{{ $errors->first('type_id') }}</span>
            </div>


            <div class="form-group {{ $errors->has('picture') ? 'has-error' : '' }}">
                {!! Form::label('InStock:') !!}
                {{ Form::checkbox('InStock', 1, true) }}
                <span class="text-danger">{{ $errors->first('InStock') }}</span>
            </div>




            <div class="form-group">
                <button type="submit" class="btn btn-success">Add</button>
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection