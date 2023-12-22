<form action="{{ route('cadastro.store') }}" method="POST">
@csrf <!-- {{ csrf_field() }} -->
    <div>
        <label for="nome">Coloque seu nome</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="telefone">Coloque seu telefone</label>
        <input type="text" name="telefone" id="telefone" required>
        <br>
        <label for="email">Coloque seu email</label>
        <input type="text" name="email" id="email" required>
    </div>
    <button type="submit">Enviar</button>
</form>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
