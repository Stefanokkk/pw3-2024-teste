@extends('base')

@section('titulo', 'Apagar | Filmes para assistir')

@section('conteudo')
<div class="max-w-md mx-auto p-4 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Confirmação de Exclusão</h1>

    <p class="mb-4 text-gray-700">Tem certeza que deseja apagar o filme?</p>
    <p class="mb-4 text-gray-800"><em>{{ $filme['nome'] }}</em></p>

    <form action="{{ route('filmes.apagar', $filme['id']) }}" method="post" class="space-y-4">
        @method('delete')
        @csrf

        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
            Pode apagar sem medo
        </button>
    </form>

    <a href="{{ route('filmes') }}" class="mt-4 inline-block text-blue-600 hover:underline">
        Cancelar
    </a>
</div>
@endsection
