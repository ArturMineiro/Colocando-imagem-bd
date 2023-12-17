<!-- resources/views/image/create.blade.php -->

<form action= "{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="image">Escolha uma imagem:</label>
        <input type="file" name="image" id="image" required>
    </div>
    <button type="submit">Enviar</button>
</form>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
