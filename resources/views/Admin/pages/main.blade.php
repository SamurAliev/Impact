@extends('adminlte::page')

@section('content')

    {!! Form::open([
                    'route'=> 'main.form.update',
                    'method'=>'put',
                    'files'=>true

            ]) !!}

    <div class="card-body">
        @include('flash::message')
        <div class="form-group">
            {{Form::label('exampleInputTitle1', 'Заголовок')}}
            {{ Form::text('main_title', "$info->main_title", ['class' => 'form-control', 'id'=> 'exampleInputTitle1'])}}
            @error('main_title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {{Form::label('exampleInputApplication1', 'Текст заявки')}}
            {{ Form::text('application_text', "$info->application_text", ['class' => 'form-control', 'id'=> 'exampleInputApplication1'])}}
            @error('application_text')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {{Form::label('exampleInputDescTitle1', 'Заголовок описания')}}
            {{ Form::text('description_title', "$info->description_title", ['class' => 'form-control', 'id'=> 'exampleInputDescTitle1'])}}
            @error('description_title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {{Form::label('exampleInputDescription1', 'Описание')}}
            {{ Form::text('description_content', "$info->description_content", ['class' => 'form-control', 'id'=> 'exampleInputDescription1'])}}
            @error('description_content')
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
                <img class="mt-3" src="{{$info->getImagePath('image', 'thumb')}}" alt="">
            </div>
            @error('image')
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


@section('js')
    <script> $(document).ready(function () {
            bsCustomFileInput.init();
        })</script>
@stop
