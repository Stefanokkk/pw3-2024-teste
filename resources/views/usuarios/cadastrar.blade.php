{{-- views/usuario/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Cadastrar Usuário')

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

<form method="post" action="{{ route('usuarios.gravar') }}" class="space-y-4">
    @csrf
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Nome:</label>
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">E-mail:</label>
        <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>

    <div>
        <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
        <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>

    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Senha:</label>
        <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>

    <div>
        <label for="admin" class="block text-sm font-medium text-gray-700">Admin:</label>
        <select name="admin" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
    </div>

    <div>
        <input type="submit" value="Gravar" class="w-full bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
    </div>
</form>
@endsection
