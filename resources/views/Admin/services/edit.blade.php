@extends('adminlte::page')

@section('content')

    {!! Form::open([
                'route'=>['services.update', $service],
                'method'=>'put',
                'files'=> true
        ]) !!}
    @include('flash::message')

    <div class="card-body">
        <div class="form-group">
            {{Form::label('title', 'Заголовок')}}
            {{ Form::text('title', $service->title, ['class' => 'form-control', 'id'=> 'title'])}}
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="form-group">
            {{Form::label('title_description', 'Описание')}}
            {{ Form::text('title_description', $service->title_description, ['class' => 'form-control', 'id'=> 'title_description'])}}
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
                <img class="mt-3" src="{{$service->getImagePath('image', 'thumb')}}" alt="">

            </div>
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <hr>

        <h2 class="ml-5 mb-4 mt-3">Внутреняя часть</h2>

        <div class="form-group">
            {{Form::label('inner_title', 'Заголовок в sidebar-menu')}}
            {{ Form::text('inner_title', $service->inner_title, ['class' => 'form-control', 'id'=> 'inner_title'])}}
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
                <img class="mt-3" src="{{$service->getImagePath('inner_image', 'thumb')}}" alt="">

                @error('inner_image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>


        @foreach ($service->descriptions as $description)


            <div class="form-group">
                {{Form::label("description{$loop->iteration }", "Нижнее описание №{$loop->iteration }")}}
                {{ Form::text('content[]', $description->content, ['class' => 'form-control', 'id'=> "description{$loop->iteration }"])}}
                @error("description{$loop->iteration }")
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

        @endforeach


    </div>
    <!-- /.card-body -->


    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Изменить</button>
    </div>


    {!! Form::close() !!}

    <div class="card mt-4">
        <div class="card-header">
            <h3 class="card-title">Список тарифов</h3>

        </div>

        <!-- /.card-header -->
        <div class="card-body">
            {{session(['id' => $service->id])}}
            <a href="{{route('tariffs.create')}}" type="button" class="btn  btn-success mb-3">Добавить</a>

            <table id="users" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Заголовок</th>
                    <th>Содержание</th>
                    <th>Цена</th>
                    <th>Edit/Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($tariffs as $tariff)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$tariff->title}}</td>
                        <td>{{$tariff->content }}</td>
                        <td>{{$tariff->price }}</td>
                        <td>
                            <a href="{{route('tariffs.edit', $tariff->id)}}" type="button" class="btn mb-2 btn-warning ">Редактировать</a>
                            {{Form::open(['route'=>['tariffs.destroy', $tariff->id], 'method'=> 'delete'])}}
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
    <script>
        $(document).ready(function () {
            bsCustomFileInput.init()
        });
    </script>

@stop
