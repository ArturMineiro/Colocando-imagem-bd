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
            'image' => 'required|image|max:2048', // Validação básica
        ]);
   // Obtendo o arquivo
   $file = $request->file('image');

   // Gerando um nome único para o arquivo
   $filename = time() . '_' . $file->getClientOriginalName();

   // Definindo o caminho da pasta dentro de 'public'
   $destinationPath = public_path('uploaded_images');

   // Movendo o arquivo para a pasta desejada
   $file->move($destinationPath, $filename);

   // Salvar o caminho no banco de dados ou outra lógica necessária
   $image = new Image();
   $image->image_path = 'uploaded_images/' . $filename; // Salve apenas a parte relativa do caminho
   $image->save();

   return back()->with('success', 'Imagem enviada com sucesso!');

}
    }


    
