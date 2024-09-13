@extends('base')

@section('titulo', 'Cadastrar | Filmes para assistir')

@section('conteudo')
<p class="text-lg font-bold mb-4">Preencha o formulário</p>

@if($errors->any())
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
    <h4 class="font-bold">Deu ruim</h4>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
</div>
@endif

<form method="post" enctype="multipart/form-data" action="{{ route('filmes.gravar') }}" class="space-y-4">
    @csrf
    <div>
        <label for="nome" class="block text-sm font-medium text-gray-700">Nome:</label>
        <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>

    <div>
        <label for="sinopse" class="block text-sm font-medium text-gray-700">Sinopse:</label>
        <input type="text" name="sinopse" placeholder="Sinopse" value="{{ old('sinopse') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>

    <div>
        <label for="ano" class="block text-sm font-medium text-gray-700">Ano:</label>
        <input type="number" name="ano" placeholder="Ano" value="{{ old('ano') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>

    <div>
        <label for="categoria" class="block text-sm font-medium text-gray-700">Categoria:</label>
        <input type="text" name="categoria" placeholder="Categoria" value="{{ old('categoria') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>

    <div>
        <label for="link" class="block text-sm font-medium text-gray-700">Link do trailer:</label>
        <input type="text" name="link" placeholder="Link do trailer" value="{{ old('link') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>

    <div>
        <label for="imagem" class="block text-sm font-medium text-gray-700">Imagem:</label>
        <input type="file" id="imagem" name="imagem" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">
    </div>

    <div>
        <input type="submit" value="Gravar" class="w-full bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
    </div>
</form>
@endsection
