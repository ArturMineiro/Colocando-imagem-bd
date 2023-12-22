<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index(){
        
        $user = User::all();
          return view('cadastro.index');
        
    }


    public function create()
    {
        return view('cadastro.create');
    }

    // Processa o upload da imagem
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required', // Nome do campo no formulário
            'email' => 'required|email|unique:users',
            'telefone' => 'required' // Nome do campo no formulário
        ]);
        
    $user = new User;
    $user->nome = $request->input('nome'); // Use 'nome' aqui
    $user->email = $request->input('email');
    $user->telefone = $request->input('telefone'); // Use 'telefone' aqui
    $user->save();

    return back()->with('success', 'Dados enviados com sucesso!');

    }
}
