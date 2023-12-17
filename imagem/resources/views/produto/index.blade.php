<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body>

<a href="{{url('produto/create')}}">Create </a>
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
</div>
        @endif
    <br>

    <table>
        <tr>
            <th>Nome</th>
            <th>Ação</th>
        </tr>
        @foreach ($produtos as $value)
        <tr>
            <td>{{$value->nome}}<br></td>
         <td>
            <a href="{{url('produto/'.$value->id) }}">visualizar</a>
            <a href="{{url('produto/'.$value->id. '/edit') }}">Editar</a> 
            {!!Form::open(['url'=>'produto/'.$value->id,'method'=>'delete'])!!} 
            {!!Form::submit('Excluir')!!}
            {!!Form::close()!!}    

        </td>
        
        </tr>

        @endforeach
    </table>  


   
    
</body>

</html>