<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    //LISTA AUTORES
    public function index()
    {
        $autor = Autor::all();
        return view('frontend.autores.index', compact('autor'));
    }

    //ADD CATEGORY
    public function add()
    {
        return view('frontend.autores.add');
    }

    public function insert(Request $request)
    {
        $autor = new Autor();
        $autor->nome = $request->input('nome');
        $autor->biografia = $request->input('biografia');
        $autor->save();
        return redirect('/autores')->with('status', "Autor Adicionado com Sucesso");
        
    }

    //UPDATE CATEGORY
    public function edit($id)
    {
        $autor = Autor::find($id);
        return view('frontend.autores.edit', compact('autor'));
    }

    public function update(Request $request, $id)
    {
        $autor = Autor::find($id);
        $autor->nome = $request->input('nome');
        $autor->biografia = $request->input('biografia');
        $autor->update();
        return redirect('autores')->with('status', "Autor Atualizado com Sucesso");
        
    }

    //DELETE CATEGORY
    public function destroy($id)
    {
        $autor = Autor::find($id);
        $autor->delete();
        return redirect('autores')->with('status', "Autor Deletada com Sucesso");
    }

}
