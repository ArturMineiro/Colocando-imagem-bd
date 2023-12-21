<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
{
    $images = Image::all(); // Busca todas as imagens do banco de dados
    return view('image.index', compact('images')); // Passa as imagens para a view
}

    // Exibe o formulário
    public function create()
    {
        return view('image.create');
    }

    // Processa o upload da imagem
    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|max:2048', // Validação para múltiplos arquivos
        ]);
    
        foreach ($request->file('images') as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('uploaded_images');
            $file->move($destinationPath, $filename);
    
            $image = new Image();
            $image->image_path = 'uploaded_images/' . $filename;
            $image->save();
        }
    
        return back()->with('success', 'Imagens enviadas com sucesso!');
    }
    }

