<h3>Имя:</h3> {{$fields['name']}}
<h3>Номер:</h3> {{$fields['number']}}
@if(array_key_exists ( 'opt' , $fields ))
    <h3>Услуги:</h3>
    @foreach( $fields['opt'] as $opt)
        {{\App\Models\Service::find($opt)->title}},
    @endforeach

@endif


