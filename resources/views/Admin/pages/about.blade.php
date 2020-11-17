@extends('adminlte::page')

@section('content')

    {!! Form::open([
    'route'=> 'about.edit',
    'method'=>'put',
    'files'=>true
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
            {{Form::label('partners_title', 'Заголовок партнеров')}}
            {{ Form::text('partners_title', "$info->partners_title", ['class' => 'form-control', 'id'=> 'partners_title'])}}
            @error('partners_title')
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

    <div class="card mt-4">
        <div class="card-header">
            <h3 class="card-title">Логотипы партнеров</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <a href="{{route('partners.create')}}" type="button" class="btn  btn-success mb-3">Добавить</a>

            <table id="users" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Изображение</th>
                    <th>Удаление</th>
                </tr>
                </thead>
                <tbody>

                @foreach($partners as $partner)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{$partner->getImagePath('image', 'thumb')}}" alt=""> </td>
                        <td>
                            {{Form::open(['route'=>['partners.destroy', $partner->id], 'method'=> 'delete'])}}
                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">
                                Удалить
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>




@endsection

@section('js')
    <script> $(document).ready(function () {
            bsCustomFileInput.init()
        })</script>
@stop
