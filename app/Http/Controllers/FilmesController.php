<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index() {
        $dados = Filme::all();

        return view('filmes.index', [
            'filmes' => $dados,
        ]);
    }

    public function cadastrar() {
        return view('filmes.cadastrar');
    }

    public function gravar(Request $form) {

        $dados = $form->validate([
            'nome' => 'required|min:3',
            'sinopse' => 'required',
            'ano' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'categoria' => 'required',
            'imagem' => 'required',
            'link' => 'required'
        ]);

        $img = $form->file('imagem')->store('filmes', 'imagens');

        $dados['imagem'] = $img;

        Filme::create($dados);

        return redirect()->route('filmes');
    }

    public function editarForm ($id) {
        $filme = Filme::find($id);

        return view('filmes.editarForm', [
            'filme' => $filme,
        ]);
    }

    public function editar(Request $form, $id) {
        $filme = Filme::find($id);


        $dados = $form->validate([
            'nome' => 'required|min:3',
            'sinopse' => 'required',
            'ano' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'categoria' => 'required',
            'link' => 'required'
        ]);

        $filme->update($dados);

        return redirect()->route('filmes', $id);
    }

    public function apagar(Filme $filme) {
        return view('filmes.apagar', [
            'filme' => $filme,
        ]);
    }

    public function deletar(Filme $filme) {
        $filme->delete();
        return redirect()->route('filmes');
    }
}
