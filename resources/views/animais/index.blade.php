{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')
<p>
    <a href="{{ route('animais.cadastrar') }}"  class="px-4 py-1 text-white font-light tracking-wider bg-blue-800 rounded"><i class="fas fa-plus mr-3"></i> Cadastrar animal</a>
</p>
<p>Veja nossa lista de animais para adoção</p>

<div class="bg-white w-full">
    <table class="min-w-full bg-white">
        <thead class="bg-gray-700 text-white text-left">
            <tr class="">
                <th>Nome</th>
                <th>Idade</th>
                <th>Ações</th>
            </tr>
        </thead>
        @foreach ($animais as $animal)
        <tr>
            <td>{{ $animal['nome'] }}</td>
            <td>{{ $animal['idade'] }}</td>
            <td><a href="{{ route('animais.apagar', $animal['id']) }}">Apagar</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection