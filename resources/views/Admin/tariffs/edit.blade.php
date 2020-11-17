@extends('adminlte::page')

@section('content')

    {!! Form::open([
                'route'=>['tariffs.update', $tariff->id],
                'method'=>'put'
        ]) !!}
    <div class="card-body">
        <div class="form-group">
            {{Form::label('title', 'Заголовок')}}
            {{ Form::text('title', $tariff->title, ['class' => 'form-control', 'id'=> 'title'])}}
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="form-group">
            {{Form::label('content', 'Описание')}}
            {{ Form::text('content', $tariff->content, ['class' => 'form-control', 'id'=> 'content'])}}
            @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {{Form::label('price', 'Цена')}}
            {{ Form::text('price', $tariff->price, ['class' => 'form-control', 'id'=> 'price'])}}
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>



    </div>
    <!-- /.card-body -->


    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Изменить</button>
    </div>


    {!! Form::close() !!}

@endsection
