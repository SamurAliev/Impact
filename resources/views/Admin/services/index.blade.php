@extends('adminlte::page')

@section('content')

    <a href="{{route('services.create')}}" type="button" class="btn btn-success mb-3">Добавить</a>

    @include('flash::message')

    <div class="card mt-4">
        <div class="card-header">
            <h3 class="card-title">Список услуг</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="users" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Заголовок</th>
                    <th>Описание</th>
                    <th>Изображение</th>
                    <th>Edit/Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{$service->id}}</td>
                        <td>{{$service->title}}</td>
                        <td>{{ $service->title_description }}</td>
                        <td><img src="{!! $service->getImagePath('image', 'thumb') !!}" alt=""></td>
                        <td>
                            <a href="{{route('services.edit', $service)}}" type="button" class="btn mb-2 btn-warning ">Редактировать</a>
                            {{Form::open(['route'=>['services.destroy', $service], 'method'=> 'delete'])}}
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

@section('plugins.Datatables', true)

@section('js')
    <script>
        $(document).ready(function () {
            $('#users').DataTable();
            bsCustomFileInput.init();

        });
    </script>

@stop
