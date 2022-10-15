<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Cliente;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    //LISTA CARROS
    public function index()
    {
        $carro = Carro::all();
        return view('frontend.carro.index', compact('carro'));
    }

    //ADD CARRO

    public function add()
    {
        $cliente = Cliente::all();
        return view('frontend.carro.add', compact('cliente'));
    }

    public function insert(Request $request)
    {
        $carro = new Carro();
        $carro->cliente_id = $request->input('cliente_id');
        $carro->modelo = $request->input('modelo');
        $carro->ano = $request->input('ano');
        $carro->chassi = $request->input('chassi');
        $carro->save();
        return redirect('carros')->with('status', "Carro Adicionado com Sucesso");
    }

    //ATUALIZAR CARRO
    public function edit($id)
    {
        $carro = Carro::find($id);
        return view('frontend.carro.edit', compact('carro'));
    }

    public function update(Request $request, $id)
    {
        $carro = Carro::find($id);
        $carro->modelo = $request->input('modelo');
        $carro->ano = $request->input('ano');
        $carro->chassi = $request->input('chassi');
        $carro->update();
        return redirect('carros')->with('status', "Carro Atualizado com Sucesso");
    }

    //ATUALIZAR CARRO
    public function destroy($id)
    {
        $carro = Carro::find($id);
        $carro->delete();
        return redirect('carros')->with('status', "Carro Deletado com Sucesso");
    }

}
