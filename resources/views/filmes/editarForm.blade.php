{{-- views/filmes/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Editar | Filmes para assistir')

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

<form method="post" enctype="multipart/form-data" action="{{ route('filmes.editar', $filme['id']) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" placeholder="Nome" value="{{ $filme['nome'] }}">
    </div>
    <br>
    <div>
        <label for="sinopse">Sinopse: </label>
        <input type="text" name="sinopse" placeholder="Sinopse" value="{{ $filme['sinopse'] }}">
    </div>
    <br>
    <div>
        <label for="ano">Ano: </label>
        <input type="number" name="ano" placeholder="Ano" value="{{ $filme['ano'] }}">
    </div>
    <br>
    <div>
        <label for="categoria">Categoria: </label>
        <input type="text" name="categoria" placeholder="Categoria" value="{{ $filme['categoria'] }}">
    </div>
    <br>
    <div>
        <label for="link">Link do trailer: </label>
        <input type="text" name="link" placeholder="Link do trailer" value="{{ $filme['link'] }}">
    </div>
    <br>
    <input type="submit" value="Gravar">
</form>
@endsection
