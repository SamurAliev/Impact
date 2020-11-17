@extends('adminlte::page')

@section('content')

    {!! Form::open([
                'route'=>['tariffs.store']
        ]) !!}
    {{session(['id' => $serviceId])}}

    <div class="card-body">
        <div class="form-group">
            {{Form::label('title', 'Заголовок')}}
            {{ Form::text('title', old('title'), ['class' => 'form-control', 'id'=> 'title'])}}
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="form-group">
            {{Form::label('content', 'Описание')}}
            {{ Form::text('content', old('content'), ['class' => 'form-control', 'id'=> 'content'])}}
            @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {{Form::label('price', 'Цена')}}
            {{ Form::text('price', old('price'), ['class' => 'form-control', 'id'=> 'price'])}}
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>



    </div>
    <!-- /.card-body -->


    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Добавить</button>
    </div>


    {!! Form::close() !!}

@endsection
