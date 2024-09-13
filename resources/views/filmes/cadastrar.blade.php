{{-- views/filmes/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Filmes para assistir')

@section('conteudo')
<p>Preencha o formulário</p>

@if($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
</div>
@endif

<form method="post" enctype="multipart/form-data" action="{{ route('filmes.gravar') }}">
    @csrf
    <div>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}">
    </div>
    <br>
    <div>
        <label for="sinopse">Sinopse: </label>
        <input type="text" name="sinopse" placeholder="Sinopse" value="{{ old('sinopse') }}">
    </div>
    <br>
    <div>
        <label for="ano">Ano: </label>
        <input type="number" name="ano" placeholder="Ano" value="{{ old('ano') }}">
    </div>
    <br>
    <div>
        <label for="categoria">Categoria: </label>
        <input type="text" name="categoria" placeholder="Categoria" value="{{ old('categoria') }}">
    </div>
    <br>
    <div>
        <label for="link">Link do trailer: </label>
        <input type="text" name="link" placeholder="Link do trailer" value="{{ old('link') }}">
    </div>
    <br>
    <div>
        <label for="imagem">Imagem</label>
        <input type="file" id="imagem" name="imagem">
    </div>
    <input type="submit" value="Gravar">
</form>
@endsection
