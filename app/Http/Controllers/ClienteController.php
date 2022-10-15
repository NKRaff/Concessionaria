<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //LISTA CLIENTES
    public function index()
    {
        $cliente = Cliente::all();
        return view('frontend.cliente.index', compact('cliente'));
    }

    //ADD CLIENTE
    public function add()
    {
        return view('frontend.cliente.add');
    }

    public function insert(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');
        $cliente->save();
        return redirect('clientes')->with('status', "Cliente Adicionado com Sucesso");
        
    }

    //UPDATE CLIENTE
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('frontend.cliente.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->nome = $request->input('nome');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');
        $cliente->update();
        return redirect('clientes')->with('status', "Cliente Atualizado com Sucesso");
        
    }

    //DELETE CLIENTE
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('clientes')->with('status', "Cliente Deletada com Sucesso");
    }

}
