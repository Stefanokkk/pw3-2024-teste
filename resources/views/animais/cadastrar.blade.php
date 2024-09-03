{{-- views/animais/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

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

<form method="post" enctype="multipart/form-data" action="{{ route('animais.gravar') }}">
    @csrf
    <div>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}">
    </div>
    <br>
    <div>
        <label for="idade">Idade: </label>
        <input type="number" name="idade" placeholder="Idade" value="{{ old('idade') }}">
    </div>
    <br>
    <div>
        <label for="imagem">Imagem</label>
        <input type="file" id="imagem" name="imagem">
    </div>
    <input type="submit" value="Gravar">
</form>
@endsection