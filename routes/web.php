<?php

use App\Http\Controllers\FilmesController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicial');
})->name('index');

Route::get('/filmes', [FilmesController::class, 'index'])->name('filmes');

Route::get('/filmes/cadastrar', [FilmesController::class, 'cadastrar'])->middleware('admin')->name('filmes.cadastrar');

Route::post('/filmes/cadastrar',[FilmesController::class, 'gravar'])->middleware('admin')->name('filmes.gravar');

Route::get('/filmes/apagar/{filme}', [FilmesController::class, 'apagar'])->middleware('admin')->name('filmes.apagar');

Route::get('/filmes/editarForm/{filme}', [FilmesController::class, 'editarForm'])->middleware('admin')->name('filmes.editarForm');

Route::put('/filmes/editar/{id}',[FilmesController::class, 'editar'])->middleware('admin')->name('filmes.editar');

Route::delete('/filmes/apagar/{filme}', [FilmesController::class, 'deletar'])->middleware('admin');

Route::prefix('usuarios')->middleware('auth')->group(function() {
    Route::get('/', [UsuariosController::class, 'index'])->middleware('admin')->name('usuarios');

    Route::get('/inserir', [UsuariosController::class, 'create'])->middleware('admin')->name('usuarios.inserir');

    Route::post('/inserir', [UsuariosController::class, 'insert'])->middleware('admin')->name('usuarios.gravar');
});

Route::get('login', [UsuariosController::class, 'login'])->name('login');

Route::post('login', [UsuariosController::class, 'login']);

Route::get('logout', [UsuariosController::class, 'logout'])->name('logout');
