@extends('base')

@section('titulo', 'Filmes para assistir')

@section('conteudo')
<p>
    <a href="{{ route('filmes.cadastrar') }}" class="px-4 py-1 text-white font-light tracking-wider bg-blue-800 rounded"><i class="fas fa-plus mr-3"></i> Cadastrar filme</a>
</p>
<p>Veja nossa lista de filmes para assistir</p>

<div class="w-full">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($filmes as $filme)
        <div class="shadow-md rounded-lg overflow-hidden flex flex-col">
            <img class="w-full h-48 object-cover" src="img/{{ $filme['imagem'] }}" alt="{{ $filme['nome'] }}">
            <div class="p-4 flex flex-col flex-grow">
                <h3 class="text-xl font-semibold">{{ $filme['nome'] }}</h3>
                <p class="text-gray-700 mt-2">{{ $filme['sinopse'] }}</p>
                <p class="text-sm text-gray-500 mt-2">Ano: {{ $filme['ano'] }}</p>
                <p class="text-sm text-gray-500">Categoria: {{ $filme['categoria'] }}</p>
                <a href="{{ $filme['link'] }}" class="block mt-3 text-blue-500 hover:underline">{{ $filme['nome'] }} - Trailer</a>
                
                <div class="flex justify-between mt-auto">
                    <button class="border border-yellow-500 rounded-md">
                        <a href="{{ route('filmes.editarForm', $filme['id']) }}" class="text-yellow-500 p-2 block">Editar</a>
                    </button>
                    <button class="border border-red-500 rounded-md">
                        <a href="{{ route('filmes.apagar', $filme['id']) }}" class="text-red-500 p-2 block">Apagar</a>                       
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
