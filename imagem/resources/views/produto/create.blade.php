<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    Formulario -Create<br>
   {!!Form::open(['url'=> 'produto/create']) !!}
  {{Form::label('nome','Nome:')}}<br>
  {{Form::text('nome')}}<br>
  
  {{Form::label('quantidade','Quantidade:')}}<br>
  {{Form::text('quantidade')}}

 
  <br><br>
  {{Form::submit('Enviar')}}
   {!!Form::close() !!}
</body>

</html>