@extends('adminlte::page')

@section('content')

    {!! Form::open([
    'route'=> 'partners.store',
    'method'=>'post',
    'files'=>true
    ]) !!}

    <div class="form-group">
        <div class="form-group">
            <label for="image">Изображение</label>
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

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Создать</button>
    </div>

    {!! Form::close() !!}

@endsection
@section('js')
    <script> $(document).ready(function () {
            bsCustomFileInput.init()
        })</script>
@stop
