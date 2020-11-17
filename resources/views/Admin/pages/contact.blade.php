@extends('adminlte::page')

@section('content')

    {!! Form::open([
    'route'=> 'contact.edit',
    'method'=>'put'
    ]) !!}

    <div class="card-body">
        @include('flash::message')
        <div class="form-group">
            {{Form::label('main_title', 'Заголовок')}}
            {{ Form::text('main_title', "$info->main_title", ['class' => 'form-control', 'id'=> 'main_title'])}}
            @error('main_title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {{Form::label('name_input', 'Поле имени')}}
            {{ Form::text('name_input', "$info->name_input", ['class' => 'form-control', 'id'=> 'name_input'])}}
            @error('name_input')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {{Form::label('number_input', 'Поле номера')}}
            {{ Form::text('number_input', "$info->number_input", ['class' => 'form-control', 'id'=> 'number_input'])}}
            @error('number_input')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {{Form::label('button_send', 'Поле номера')}}
            {{ Form::text('button_send', "$info->button_send", ['class' => 'form-control', 'id'=> 'button_send'])}}
            @error('button_send')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Редактировать</button>
    </div>

    {!! Form::close() !!}

@endsection
