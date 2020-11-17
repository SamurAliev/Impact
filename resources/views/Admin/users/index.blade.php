@extends('adminlte::page')

@section('content')

    <div class="row">
        <div class="col-12">
            @if(Auth::user()->role->name == 'Admin')
            <a href="{{route('users.create')}}" type="button" class="btn  btn-success">Добавить</a>
            @endif




            <div class="card mt-4">
                <div class="card-header">
                    <h3 class="card-title">Пользователи админки</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="users" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Edit/Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{ $user->email }}</td>
                                <td>{!! $user->role->name !!}</td>
                                @if(Auth::user()->role->name == 'Admin')
                                <td>
                                    <a href="{{route('users.edit', $user)}}" type="button" class="btn mb-2 btn-warning ">Редактировать</a>
                                    {{Form::open(['route'=>['users.destroy', $user], 'method'=> 'delete'])}}
                                        <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Удалить</button>
                                    {!! Form::close() !!}
                                </td>
                                @else
                                    <td>
                                        -
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>


        </div>
    </div>





@endsection
@section('plugins.Datatables', true)

@section('js')
    <script>
        $(document).ready( function () {
            $('#users').DataTable();
        } );
    </script>

@stop

