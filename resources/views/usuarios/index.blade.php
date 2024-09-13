{{-- resources/views/usuarios/index.blade.php --}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')
<p class="mb-4">
    <a href="{{ route('usuarios.inserir') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Cadastrar usuário
    </a>
</p>

<p class="text-lg font-bold mb-4">Lista de usuários</p>

<table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
    <thead class="bg-gray-100">
        <tr>
            <th class="py-2 px-4 border-b border-gray-300 text-left">ID</th>
            <th class="py-2 px-4 border-b border-gray-300 text-left">Nome</th>
            <th class="py-2 px-4 border-b border-gray-300 text-left">Email</th>
            <th class="py-2 px-4 border-b border-gray-300 text-left">Admin</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr class="hover:bg-gray-50">
            <td class="py-2 px-4 border-b border-gray-300">{{ $usuario->id }}</td>
            <td class="py-2 px-4 border-b border-gray-300">{{ $usuario->name }}</td>
            <td class="py-2 px-4 border-b border-gray-300">{{ $usuario->email }}</td>
            <td class="py-2 px-4 border-b border-gray-300">{{ $usuario->admin ? 'Sim' : 'Não' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
