@extends('base')

@section('titulo', 'Editar | Filmes para assistir')

@section('conteudo')
<p class="text-xl font-semibold mb-4">Preencha o formulário para editar o filme</p>

@if($errors->any())
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
    <strong class="font-bold">Deu ruim:</strong>
    <ul class="mt-1">
        @foreach($errors->all() as $erro)
            <li>{{ $erro }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="post" enctype="multipart/form-data" action="{{ route('filmes.editar', $filme['id']) }}" class="space-y-4">
    @csrf
    @method('PUT')

    <div class="flex flex-col">
        <label for="nome" class="mb-2 text-sm font-medium text-gray-700">Nome:</label>
        <input type="text" name="nome" placeholder="Nome do filme" value="{{ $filme['nome'] }}" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
    </div>

    <div class="flex flex-col">
        <label for="sinopse" class="mb-2 text-sm font-medium text-gray-700">Sinopse:</label>
        <input type="text" name="sinopse" placeholder="Sinopse do filme" value="{{ $filme['sinopse'] }}" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
    </div>

    <div class="flex flex-col">
        <label for="ano" class="mb-2 text-sm font-medium text-gray-700">Ano:</label>
        <input type="number" name="ano" placeholder="Ano de lançamento" value="{{ $filme['ano'] }}" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
    </div>

    <div class="flex flex-col">
        <label for="categoria" class="mb-2 text-sm font-medium text-gray-700">Categoria:</label>
        <input type="text" name="categoria" placeholder="Categoria do filme" value="{{ $filme['categoria'] }}" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
    </div>

    <div class="flex flex-col">
        <label for="link" class="mb-2 text-sm font-medium text-gray-700">Link do trailer:</label>
        <input type="text" name="link" placeholder="Link do trailer" value="{{ $filme['link'] }}" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
    </div>

    <div class="mt-6">
        <input type="submit" value="Editar" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer">
    </div>
</form>
@endsection
