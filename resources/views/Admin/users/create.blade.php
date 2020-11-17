@extends('adminlte::page')

@section('content')

    {!! Form::open([
                'route'=>['users.store']
        ]) !!}
    <div class="card-body">
        <div class="form-group">
            {{Form::label('exampleInputName1', 'Name')}}
            {{ Form::text('name', old('name'), ['class' => 'form-control', 'id'=> 'exampleInputName1'])}}
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="form-group">
            {{Form::label('exampleInputEmail1', 'Email address')}}
            {{ Form::text('email', old('email'), ['class' => 'form-control', 'id'=> 'exampleInputEmail1'])}}
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {{Form::label('exampleSelectRole1', 'Role')}}
            {{Form::select('role_id', $roles, null, ['class' => 'form-control', 'id'=> 'exampleSelectRole1'])}}
        </div>
        <div class="form-group">
            {{Form::label('exampleInputPassword1', 'Password')}}
            {{Form::password('password', ['class' => 'form-control', 'id'=>'exampleInputPassword1', 'placeholder'=>"Password", 'type'=>'password'])}}
            @error('password')
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
