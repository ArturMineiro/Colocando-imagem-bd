<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::orderby('nome')->get();
         return view('produto.index',['produtos'=>$produtos]);
         
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
         return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|min:5',
            'quantidade' => 'required|integer',
        ]);
        $produto = new Produto; 
        $produto->nome           =  $request->nome;
        $produto->quantidade  = $request->quantidade;
        $produto->save();

        return redirect('/produto')->with('status','Produto criado com sucesso');
         
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = Produto::find($id);
        return view('produto.show',['produto'=>$produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
