@extends('adminlte::page')

@section('content')

    {!! Form::open([
                'route'=>['services.store'],
                'files'=>true
        ]) !!}
    <div class="card-body">
        <div class="form-group">
            {{Form::label('title', 'Заголовок')}}
            {{ Form::text('title', old('title'), ['class' => 'form-control', 'id'=> 'title'])}}
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="form-group">
            {{Form::label('title_description', 'Описание')}}
            {{ Form::text('title_description', old('title_description'), ['class' => 'form-control', 'id'=> 'title_description'])}}
            @error('title_description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="image">Изображение страницы</label>
                <div class="input-group">
                    <div class="custom-file">
                        {{Form::label('image', 'Выберите изображение',['class'=>'custom-file-label'])}}
                        {{Form::file('image',['class'=>'custom-file-input'])}}
                    </div>
                </div>
            </div>
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <hr>

        <h2 class="ml-5 mb-4 mt-3">Внутреняя часть</h2>

        <div class="form-group">
            {{Form::label('inner_title', 'Заголовок в sidebar-menu')}}
            {{ Form::text('inner_title', old('inner_title'), ['class' => 'form-control', 'id'=> 'inner_title'])}}
            @error('inner_title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="image">Внутреннее изображение</label>
                <div class="input-group">
                    <div class="custom-file">
                        {{Form::label('inner_image', 'Выберите изображение',['class'=>'custom-file-label'])}}
                        {{Form::file('inner_image',['class'=>'custom-file-input'])}}
                    </div>
                </div>
            </div>
            @error('inner_image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            {{Form::label('description1', 'Нижнее описание №1')}}
            {{ Form::text('content[]', old('description1'), ['class' => 'form-control', 'id'=> 'description1'])}}
            @error('description1')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {{Form::label('description2', 'Нижнее описание №2')}}
            {{ Form::text('content[]', old('description2'), ['class' => 'form-control', 'id'=> 'description2'])}}
            @error('description2')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {{Form::label('description3', 'Нижнее описание №3')}}
            {{ Form::text('content[]', old('description3'), ['class' => 'form-control', 'id'=> 'description3'])}}
            @error('description3')
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
@section('js')
    <script>
        $(document).ready(function () {
            bsCustomFileInput.init()
        });
    </script>

@stop
