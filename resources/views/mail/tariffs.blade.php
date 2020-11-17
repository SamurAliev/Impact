<h3>Имя:</h3> {{$fields['name']}}
<h3>E-mail:</h3> {{$fields['email']}}
<h3>Услугa:</h3> {{$serviceTitle}}

@if(array_key_exists ( 'opt' , $fields ))
    <h3>Тарифы:</h3>
    @foreach( $fields['opt'] as $opt)
        {{\App\Models\Tariff::find($opt)->title}},
    @endforeach

@endif

