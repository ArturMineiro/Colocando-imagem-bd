@foreach ($images as $image)
    <div>
        <img  src="{{ asset($image->image_path) }}" alt="Imagem" style="width: 150px; height: auto; ">
    </div>
@endforeach