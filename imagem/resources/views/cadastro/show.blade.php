
@extends('layout')

@section('title', 'Lista de Usuários')
@section('header', 'Lista de Usuários')

@section('content')
    <table class="table">
        <thead>
            <tr>
                   <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                   
                    <td>{{ $user->nome }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->telefone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection