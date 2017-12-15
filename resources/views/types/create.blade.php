@extends('main')
@section('content')
    <div class="container">
        <div class="row">
            {!! Form::open(['route'=>'types.store']) !!}

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

            <div class="form-group">
                <button type="submit" class="btn btn-success">Add</button>
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection