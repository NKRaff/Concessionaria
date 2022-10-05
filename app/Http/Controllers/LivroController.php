<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    //LISTA LIVROS
    public function index()
    {
        $livro = Livro::all();
        return view('frontend.livros.index', compact('livro'));
    }

    //ADD LIVROS

    public function add()
    {
        $autor = Autor::all();
        return view('frontend.livros.add', compact('autor'));
    }

    public function insert(Request $request)
    {
        $livro = new Livro();
        $livro->autor_id = $request->input('autor_id');
        $livro->titulo = $request->input('titulo');
        $livro->sinopse = $request->input('sinopse');
        $livro->save();
        return redirect('livros')->with('status', "Livro Adicionado com Sucesso");
    }

    //Update Product
    public function edit($id)
    {
        $livro = Livro::find($id);
        return view('frontend.livros.edit', compact('livro'));
    }

    public function update(Request $request, $id)
    {
        $livro = Livro::find($id);
        $livro->titulo = $request->input('titulo');
        $livro->sinopse = $request->input('sinopse');
        $livro->update();
        return redirect('livros')->with('status', "Livro Atualizado com Sucesso");
    }

    //Delete Protucts
    public function destroy($id)
    {
        $livro = Livro::find($id);
        $livro->delete();
        return redirect('livros')->with('status', "Livro Deletado com Sucesso");
    }

}
