@extends('base')

@section('titulo', 'Editar | Filmes para assistir')

@section('conteudo')
<div class="max-w-md mx-auto p-4 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Editar Filme</h1>

    <p class="mb-4 text-gray-700">Preencha o formulário abaixo para atualizar as informações do filme.</p>

    @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <h4 class="font-bold">Deu ruim</h4>
        @foreach($errors->all() as $erro)
            <p>{{ $erro }}</p>
        @endforeach
    </div>
    @endif

    <form method="post" enctype="multipart/form-data" action="{{ route('filmes.editar', $filme['id']) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="nome" class="block text-sm font-medium text-gray-700">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome" value="{{ $filme['nome'] }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div>
            <label for="sinopse" class="block text-sm font-medium text-gray-700">Sinopse:</label>
            <input type="text" name="sinopse" id="sinopse" placeholder="Sinopse" value="{{ $filme['sinopse'] }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div>
            <label for="ano" class="block text-sm font-medium text-gray-700">Ano:</label>
            <input type="number" name="ano" id="ano" placeholder="Ano" value="{{ $filme['ano'] }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div>
            <label for="categoria" class="block text-sm font-medium text-gray-700">Categoria:</label>
            <input type="text" name="categoria" id="categoria" placeholder="Categoria" value="{{ $filme['categoria'] }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div>
            <label for="link" class="block text-sm font-medium text-gray-700">Link do trailer:</label>
            <input type="text" name="link" id="link" placeholder="Link do trailer" value="{{ $filme['link'] }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div>
            <input type="submit" value="Editar" class="w-full bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
        </div>
    </form>
</div>
@endsection
